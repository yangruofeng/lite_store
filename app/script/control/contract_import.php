<?php
/**
 * Created by PhpStorm.
 * User: sahara
 * Date: 2019/1/11
 * Time: 17:17
 */
class contract_importControl
{

    public function importOp()
    {

        // 首先是取出几条数据做导入
        $r = new ormReader();
        $sql = "select * from old_system_contract_import_task where is_need_import=1 and is_can_import=1 
        and state=0 order by open_date asc limit 0,2 ";  // 一次处理几条
        $list = $r->getRows($sql);

        $conn = ormYo::Conn();
        if( count($list) > 0 ){

            foreach( $list as $value ){

                // 先更新任务状态（事务前）
                $sql = "update old_system_contract_import_task set state='".importContractTaskStateEnum::GOING."' 
                where uid=".$value['uid'];
                $conn->execute($sql);

                $conn->startTransaction();
                try{

                    $rt = system_toolClass::oldSystemContractImportByTaskId($value['uid']);
                    if( !$rt->STS ){
                        $conn->rollback();
                        echo $rt->MSG."\n";
                        // 更新任务为失败
                        $sql = "update old_system_contract_import_task set state='".importContractTaskStateEnum::FAIL."', 
                        import_msg='".json_encode($rt)."',update_time='".Now()."'  where uid=".$value['uid'];
                        $conn->execute($sql);

                    }else{
                        $conn->submitTransaction();
                        // 内部有更新
                       /* $sql = "update old_system_contract_import_task set state='".importContractTaskStateEnum::COMPLETE."'
                        where uid=".$value['uid'];
                        $conn->execute($sql);*/
                    }


                }catch (Exception $e){
                    $conn->rollback();

                }


            }

        }


    }
}