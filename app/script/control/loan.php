<?php

class loanControl {
    public function __construct()
    {
    }


    public function disbursementTestOp()
    {
        $r = new ormReader();
        $sql = "select s.* from loan_disbursement_scheme s left join loan_contract c on c.uid=s.contract_id 
          where c.state>='".loanContractStateEnum::PENDING_DISBURSE."' and c.state<'".loanContractStateEnum::COMPLETE."' 
          and s.state in ('".schemaStateTypeEnum::CREATE."','".schemaStateTypeEnum::FAILURE."') 
           and s.disbursable_date <= '".date('Y-m-d H:i:s')."' order by s.uid desc ";

        $schema = $r->getRow($sql);

        if( !$schema ){
            die('No pending disbursement schema.');
        }

        print_r($schema);

        $ret = array(
            'succeed' => 0,
            'failed' => 0,
            'skipped' => 0
        );
        $rt = loanDisbursementWorkerClass::schemaDisburse($schema['uid']);
        if (!$rt->STS) {
            logger::record("exec_disbursement_schema_script", $rt->MSG . "\n" . my_json_encode($schema) );
            $ret['failed'] += 1;
        } else {
            $ret['succeed'] += 1;
        }
        print_r($rt);
    }


    public function repaymentTestOp()
    {
        $tasks = (new loan_installment_schemeModel())->getAllNeedRepaymentSchema();
        $schema = current($tasks);
        $ret = array(
            'succeed' => 0,
            'failed' => 0,
            'skipped' => 0
        );
        print_r($schema);

        $schema_id = $schema['uid'];
        $penalty = loan_baseClass::calculateSchemaRepaymentPenalties($schema_id);
        $class_instance = new schemaRepaymentByBalanceClass($schema_id,$penalty);
        $class_instance->is_script_execute = 1;
        $rt = $class_instance->repaymentExecute();
        if (!$rt->STS) {

            $ret['failed'] += 1;
        } else {

            $ret['succeed'] += 1;
        }

        return new result(true, null, $ret);
    }

    public function exec_disbursement_schemaOp() {

        $tasks = (new loan_disbursement_schemeModel())->getAllAutoDisbursementSchemaList();
        $ret = array(
            'succeed' => 0,
            'failed' => 0,
            'skipped' => 0
        );
        $m_script = new loan_disburse_scheme_script_taskModel();
        foreach ($tasks as $schema) {

            try{

                $rt = $m_script->scriptExecutingPrepare($schema['uid']);
                if( !$rt->STS ){
                    logger::record("exec_disbursement_schema_script", json_encode($rt) . "\n" .my_json_encode($schema));
                    $ret['failed'] += 1;
                    continue;
                }

                $rt = loanDisbursementWorkerClass::schemaDisburse($schema['uid']);
                if( !$rt->STS ){
                    logger::record("exec_disbursement_schema_script", json_encode($rt) . "\n" . my_json_encode($schema) );
                    $ret['failed'] += 1;

                    // 如果失败了，就5分钟后再试
                    $m_script->scriptExecutingFinish($schema['uid'],$rt->CODE,json_encode($rt),
                        0,time()+300);
                }
                $ret['succeed'] += 1;

                // 成功就不需要处理了

            }catch( Exception $e ){
                logger::record("exec_disbursement_schema_script", $e->getMessage() . "\n" . my_json_encode($schema) );
                $ret['failed'] += 1;
                continue;
            }


        }

        return new result(true, null, $ret);

    }

    public function schemaRepaymentExecuteOp()
    {
        $m = new loan_installment_schemeModel();
        $tasks = $m->getAllNeedRepaymentSchema();
        $ret = array(
            'succeed' => 0,
            'failed' => 0,
            'skipped' => 0
        );

        foreach ($tasks as $schema) {

            try{
                $schema_id = $schema['uid'];
                $rt = $m->scriptExecutingPrepare($schema_id);
                if (!$rt->STS) {
                    logger::record("exec_repayment_schema_script", json_encode($rt) . "\n" .my_json_encode($schema));
                    $ret['failed'] += 1;
                    continue;
                }

                $penalty = loan_baseClass::calculateSchemaRepaymentPenalties($schema_id);

                $class_instance = new schemaRepaymentByBalanceClass($schema_id,$penalty);
                $class_instance->is_script_execute = true;

                $rt = $class_instance->repaymentExecute();
                if( !$rt->STS ){
                    logger::record("exec_repayment_schema_script", json_encode($rt) . "\n" .my_json_encode($schema));
                    $ret['failed'] += 1;

                    switch ($rt->CODE) {
                        case errorCodesEnum::BALANCE_NOT_ENOUGH:
                            // 余额不足的继续脚本执行
                            // 指定下次重试时间的，可以设置第三个参数$nextExecuteTime
                            $m->scriptExecutingFinish($schema_id, $rt->CODE,0,12*3600,json_encode($rt));
                            break;
                        default:
                            // 其他情况暂停脚本执行xx   改成一天2次
                            $m->scriptExecutingFinish($schema_id, $rt->CODE, 0,12*3600,json_encode($rt));
                            break;
                    };
                }else {
                    $ret['succeed'] += 1;

                    // 成功的情况，可能没有还完，至少12小时再尝试扣一次
                    $m->scriptExecutingFinish($schema_id, 0, 0, 12 * 3600,json_encode($rt));
                }

            }catch( Exception $e ){
                $ret['failed'] += 1;
                logger::record("exec_repayment_schema_script", $e->getMessage() . "\n" .my_json_encode($schema));
                continue;
            }



        }


        return new result(true, null, $ret);
    }


    // 贷款还款消息提醒
    public function loanRepaymentAlertOp()
    {

        /*
         select * from ( select s.*,lc.currency,lc.client_obj_type,lc.client_obj_guid,cm.uid member_id,cm.phone_country,
        cm.phone_number,DATEDIFF(s.receivable_date,'2018-12-11') day_diff,
        max(sa.create_time) last_alert_time from loan_installment_scheme s
        inner join loan_contract lc on lc.uid=s.contract_id inner join client_member cm on cm.obj_guid=lc.client_obj_guid
        left join (select * from loan_installment_scheme_repay_alert where alert_type='sms' and is_success='1' ) sa
        on sa.scheme_id=s.uid where lc.state>='20' and lc.state<'100' and s.state>='0' and s.state<'100'
        and sa.uid is null group by s.uid ) x where x.day_diff>=0 and x.day_diff<=3

         */
        $m = new loan_installment_scheme_repay_alertModel();

        if( global_settingClass::isOpenLoanRepaymentSMSAlert() ){
            // 获取需要短信提醒的计划
            $list = $m->getAlertTaskByType(messageAlertTypeEnum::SMS);
            if( count($list) > 0 ){

                try{

                    // 发送时间定在白天(避免晚上发送)
                    $h = date('H');
                    if( $h>=8 && $h<=24 ){

                        // 一次执行10条
                        $num = 0;
                        foreach( $list as $v ){

                            if( $num >= 10 ){
                                break;
                            }

                            // 如果有执行过的话，就每隔1天执行一次
                            if( $v['last_alert_time'] && (time()-strtotime($v['last_alert_time'])) < 24*3600 ){
                                continue;
                            }

                            $rt = $m->sendSMSAlert($v);
                            if( !$rt->STS ){
                                logger::record('loan_repayment_alert',json_encode($rt));
                            }
                            $num++;
                        }

                    }


                }catch ( Exception $e){
                    logger::record("loan_repayment_alert",messageAlertTypeEnum::SMS.': '. $e->getMessage());
                }
            }

        }

        // 需要极光推送的计划
        $list = $m->getAlertTaskByType(messageAlertTypeEnum::JPUSH);
        if( count($list) > 0 ){
            try{

                // 一次执行10条
                $num = 0;
                foreach( $list as $v ){

                    if( $num >= 10 ){
                        break;
                    }

                    // 如果有执行过的话，就每隔1天执行一次
                    if( $v['last_alert_time'] && (time()-strtotime($v['last_alert_time'])) < 24*3600 ){
                        continue;
                    }

                    $rt = $m->sendJPushAlert($v);
                    if( !$rt->STS ){
                        logger::record('loan_repayment_alert',json_encode($rt));
                    }
                    $num++;
                }


            }catch ( Exception $e ){
                logger::record("loan_repayment_alert",messageAlertTypeEnum::JPUSH.': '. $e->getMessage());
            }
        }

    }

    /**
     * 结转
     * 先进行跨月结转，跨月结转全完成之后再进行逾期结转，
     * 防止未逾期的应收利息还未产生就转到其他逾期状态的应收利息（这个问题实际只是期初问题）
     */
    public function carryoverOp() {
        $contract_model = new loan_contractModel();
        $contract_list = $contract_model->getMonthCarryOverContracts(100);
        $rt = loan_baseClass::carryOverInstallmentSchemeForMonthStart($contract_list);
        if ($rt->DATA['total'] == 0) {
            $scheme_model = new loan_installment_schemeModel();
            $scheme_list = $scheme_model->getOverdueCarryOverSchemes(100);
            return loan_baseClass::carryOverInstallmentSchemeForOverdue($scheme_list);
        } else {
            return $rt;
        }
    }
}