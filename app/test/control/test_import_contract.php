<?php
/**
 * Created by PhpStorm.
 * User: sahara
 * Date: 2019/1/4
 * Time: 10:39
 */

class test_import_contractControl extends control
{
    public function __construct()
    {
        // do nothing
    }

    // 读取大文件方式1
    public function readTest1OP()
    {

        $start_time = time();

        $rowSize = 2000;
        $startRow = 1;
        $endRow = $rowSize;
        $excel_orders = array();


        $file_name = 'B001_PSB_USD';
        $excel_file = CURRENT_ROOT.'/resource/old_system_contract/'.$file_name.'.xlsx';

       /* $counter = 1;
        while (true) {
            $excel_orders = $this->readFromExcel($excel_file,$startRow,$endRow);
            if(empty($excel_orders)) {
                break;
            }
            $startRow = $endRow + 1;
            $endRow = $endRow + $rowSize;
            echo "Counter: $counter \n";
            $counter++;
        }*/
        $excel_orders = toolExcel::readFromExcel($excel_file,$startRow,$endRow);
        print_r($excel_orders);


        die;
        $php_file = CURRENT_ROOT.'/resource/old_system_contract/'.$file_name.'.php';
        file_put_contents($php_file,json_encode($excel_orders));

        echo 'success';
        $end_time = time();
        echo "\n";
        echo "Cost time: ".($end_time-$start_time).'s';



    }




    public function getDataSQLOp()
    {

        // 每次需要指定的三个参数
        $file_name = 'B005_TKO_USD_3';   // 18018
        $loan_currency = loanCurrencyEnum::USD;

        $start_row = 2;     // 第一次读取的参数
        $max_row = 5714;  // 一次不超过一万条来读

        $page_row = 2000;  // 每一次读取的行数,防止过大内存溢出
        $end_row = $start_row+$page_row;


        $excel_file = CURRENT_ROOT.'/resource/old_system_contract/'.$file_name.'.xlsx';

        $contract_sql = CURRENT_ROOT.'/resource/old_system_contract/'.$file_name.'_contract.sql';
        $schema_sql =  CURRENT_ROOT.'/resource/old_system_contract/'.$file_name.'_schema.sql';

       /* $excel_type = PHPExcel_IOFactory::identify($excel_file);
        $reader = PHPExcel_IOFactory::createReader($excel_type);
        $PHPExcel = $reader->load($excel_file);  // 这个方法不能用，文件太大了就要内存溢出
        $currentSheet = $PHPExcel->getSheet(0);
        $allColumn = $currentSheet->getHighestColumn();
        $allRow = $currentSheet->getHighestRow();
        echo $allRow.'->'.$allColumn;*/


        // 这是第一行表头数据
        $header = array (
            0 => 'Branch',
            1 => 'CID',
            2 => 'Acc',
            3 => 'Chd',
            4 => 'AccStatus',
            5 => 'CustomerName',
            6 => 'Road',
            7 => 'Village',
            8 => 'Commune',
            9 => 'Disctrict',
            10 => 'Phone_Number1',
            11 => 'Phone_Number2',
            12 => 'Gender',
            13 => 'NumberOfInstallment',
            14 => 'OpenDate',
            15 => 'FirstInstDueDate',
            16 => 'DisbursementDate',
            17 => 'MaturityDate',
            18 => 'InterestRate',
            19 => 'GrantedAmount',
            20 => 'PrincipalAmount',
            21 => 'Balance',
            22 => 'OduePrincipal',
            23 => 'DueWorkDate',
            24 => 'InstSeq',
            25 => 'DueDate',
            26 => 'PaidDate',
            27 => 'BalanceForward',
            28 => 'Status',
            29 => 'OriginalPrincipalAmount',
            30 => 'NormalInterestAmount',
            31 => 'OperationFee',
            32 => 'PrincipalBalance',
            33 => 'TotalDue',
            34 => 'BalanceCarryForward',
            35 => 'TotalNormalInterestAmount',
            36 => 'PenaltyRate',
            37 => 'ProductCode',
            38 => 'ProductName',
        );

        // 直接读取数据，格式化生成sql文件
        $contract_field = array(
            'old_client_name',
            'old_client_cid',
            'country_code',
            'phone_number',
            'contact_phone',
            'phone_number2',
            'contact_phone2',
            'old_system_contract_sn',
            'old_branch_code',
            'loan_amount',
            'currency',
            'loan_term_month',
            'old_product_code',
            'old_product_name',
            'open_date',
            'end_date',
            'principal_balance',
            'interest_rate',
            'operation_fee_rate',
            'contract_json',
            'is_need_import',
            'is_need_check',
            'is_can_import',
            'state',
            'create_time'
        );

        $schema_field = array(
            'old_system_contract_sn',
            'idx',
            'initial_principal',
            'receivable_date',
            'receivable_principal',
            'receivable_interest',
            'receivable_operation_fee',
            'amount',
            'left_principal',
            'status',
            'paid_time'
        );


        // 不够一页
        if( $end_row > $max_row ){
            $end_row = $max_row;
        }



        echo "------- start -------- \n";

        $conn = ormYo::Conn();
        $conn->startTransaction();
        try{

            while( $end_row <= $max_row ){

                if( $start_row > $max_row ){
                    break;
                }

                echo "Row: $start_row - $end_row \n";

                // 执行插入数据库逻辑
                $data_list = toolExcel::readFromExcel($excel_file,$start_row,$end_row);
                if( !empty($data_list) ){
                    $num_counter = 0;
                    foreach( $data_list as $row_data ){
                        $num_counter++;
                        // 处理每行的数据
                        $new_row = array();
                        foreach( $row_data as $k=>$v ){
                            $v = trim($v,' ');
                            // NULL导出成了字符串的'NULL'
                            if( $v == 'NULL' ){
                                $v = null;
                            }
                            $new_row[$header[$k]] = $v;
                        }
                        $new_row['country_code'] = '855';
                        $new_row['Phone_Number1'] = str_replace(' ','',$new_row['Phone_Number1']);
                        $new_row['Phone_Number2'] = str_replace(' ','',$new_row['Phone_Number2']);
                        $new_row['currency'] = $loan_currency;
                        $new_row['operation_fee_rate'] = round($new_row['OperationFee']/$new_row['PrincipalAmount']*100,2);  // 0.2 %

                        $contact_phone = null;
                        if( $new_row['Phone_Number1'] ){
                            $phone_arr = tools::getFormatPhone($new_row['country_code'],$new_row['Phone_Number1']);
                            $contact_phone = $phone_arr['contact_phone'];
                        }

                        $contact_phone2 = null;
                        if( $new_row['Phone_Number2'] ){
                            $phone_arr = tools::getFormatPhone($new_row['country_code'],$new_row['Phone_Number2']);
                            $contact_phone2 = $phone_arr['contact_phone'];
                        }

                        $c_sql = "INSERT INTO old_system_contract_import_task(".join(',',$contract_field).") VALUES ";

                        $insert_data = array(
                            'old_client_name' => qstr($new_row['CustomerName']),
                            'old_client_cid' => qstr($new_row['CID']),
                            'country_code' =>qstr($new_row['country_code']),
                            'phone_number' => qstr($new_row['Phone_Number1']),
                            'contact_phone' =>qstr($contact_phone),
                            'phone_number2' => qstr($new_row['Phone_Number2']),
                            'contact_phone2' => qstr($contact_phone2),
                            'old_system_contract_sn' => qstr($new_row['Acc']),
                            'old_branch_code' => qstr($new_row['Branch']),
                            'loan_amount' => round($new_row['PrincipalAmount'],2),
                            'currency' => qstr($new_row['currency']),
                            'loan_term_month' => intval($new_row['NumberOfInstallment']),
                            'old_product_code' => qstr($new_row['ProductCode']),
                            'old_product_name' => qstr($new_row['ProductName']),
                            'open_date' => qstr(date('Y-m-d H:i:s',strtotime($new_row['OpenDate']))),
                            'end_date' => qstr(date('Y-m-d H:i:s',strtotime($new_row['MaturityDate']))),
                            'principal_balance'  => round($new_row['Balance'],2),
                            'interest_rate' => round($new_row['InterestRate'],2),
                            'operation_fee_rate' => round($new_row['operation_fee_rate'],2),
                            'contract_json' => qstr(json_encode($new_row)),
                            'is_need_import' => 1,
                            'is_need_check' => 0,
                            'is_can_import' => 1,
                            'state' => 0,
                            'create_time' => qstr(Now())
                        );

                        $c_sql .= " (".join(',',$insert_data)."); ";

                        file_put_contents($contract_sql,$c_sql."\n",FILE_APPEND);
                        /*$rt = $conn->execute($c_sql);
                        if( !$rt->STS ){
                            $conn->rollback();
                            echo $rt->MSG;
                            die;
                        }*/

                        unset($insert_data);
                        unset($c_sql);



                        $s_sql = "insert into old_system_contract_installment_schema(".join(',',$schema_field).") values ";
                        $schema_data = array(
                            'old_system_contract_sn' => qstr($new_row['Acc']),
                            'idx' => intval($new_row['InstSeq']),
                            'initial_principal' => round($new_row['BalanceForward'],2),
                            'receivable_date' => qstr(date('Y-m-d H:i:s',strtotime($new_row['DueDate']))),
                            'receivable_principal' => round($new_row['OriginalPrincipalAmount'],2),
                            'receivable_interest' => round($new_row['NormalInterestAmount'],2),
                            'receivable_operation_fee' => round($new_row['OperationFee'],2),
                            'amount' => round($new_row['TotalDue'],2),
                            'left_principal' => round($new_row['BalanceCarryForward'],2),
                            'status' => qstr($new_row['Status']),
                            'paid_time' => qstr($new_row['PaidDate']?date('Y-m-d H:i:s',strtotime($new_row['PaidDate'])):null)
                        );
                        $s_sql .= " (".join(',',$schema_data)."); ";

                        file_put_contents($schema_sql,$s_sql."\n",FILE_APPEND);
                        /*$rt = $conn->execute($s_sql);
                        if( !$rt->STS ){
                            $conn->rollback();
                            echo $rt->MSG;
                            die;
                        }*/

                        unset($schema_data);
                        unset($s_sql);

                    }
                    echo "cnt: $num_counter \n";
                }

                $start_row = $end_row+1;
                $end_row = $end_row+$page_row;
                if( $end_row > $max_row ){
                    $end_row = $max_row;
                }
            }

            $conn->submitTransaction();
            echo "\n success \n";

        }catch (Exception $e){
            $conn->rollback();
            echo $e->getMessage();
        }

        echo "------- end -------- \n";


    }


    public function getDataSqlBySpread()
    {
        // 每次需要指定的三个参数
        $file_name = 'B005_TKO_USD';   // 18018
        $loan_currency = loanCurrencyEnum::USD;


        $excel_file = CURRENT_ROOT.'/resource/old_system_contract/'.$file_name.'.xlsx';

        $contract_sql = CURRENT_ROOT.'/resource/old_system_contract/'.$file_name.'_contract.sql';
        $schema_sql =  CURRENT_ROOT.'/resource/old_system_contract/'.$file_name.'_schema.sql';

        //require BASE_CORE_PATH.'/spreadsheet-reader-master/php-excel-reader/excel_reader2.php';
        require BASE_CORE_PATH.'/spreadsheet-reader-master/SpreadsheetReader.php';





        // 这是第一行表头数据
        $header = array (
            0 => 'Branch',
            1 => 'CID',
            2 => 'Acc',
            3 => 'Chd',
            4 => 'AccStatus',
            5 => 'CustomerName',
            6 => 'Road',
            7 => 'Village',
            8 => 'Commune',
            9 => 'Disctrict',
            10 => 'Phone_Number1',
            11 => 'Phone_Number2',
            12 => 'Gender',
            13 => 'NumberOfInstallment',
            14 => 'OpenDate',
            15 => 'FirstInstDueDate',
            16 => 'DisbursementDate',
            17 => 'MaturityDate',
            18 => 'InterestRate',
            19 => 'GrantedAmount',
            20 => 'PrincipalAmount',
            21 => 'Balance',
            22 => 'OduePrincipal',
            23 => 'DueWorkDate',
            24 => 'InstSeq',
            25 => 'DueDate',
            26 => 'PaidDate',
            27 => 'BalanceForward',
            28 => 'Status',
            29 => 'OriginalPrincipalAmount',
            30 => 'NormalInterestAmount',
            31 => 'OperationFee',
            32 => 'PrincipalBalance',
            33 => 'TotalDue',
            34 => 'BalanceCarryForward',
            35 => 'TotalNormalInterestAmount',
            36 => 'PenaltyRate',
            37 => 'ProductCode',
            38 => 'ProductName',
        );

        // 直接读取数据，格式化生成sql文件
        $contract_field = array(
            'old_client_name',
            'old_client_cid',
            'country_code',
            'phone_number',
            'contact_phone',
            'phone_number2',
            'contact_phone2',
            'old_system_contract_sn',
            'old_branch_code',
            'loan_amount',
            'currency',
            'loan_term_month',
            'old_product_code',
            'old_product_name',
            'open_date',
            'end_date',
            'principal_balance',
            'interest_rate',
            'operation_fee_rate',
            'contract_json',
            'is_need_import',
            'is_need_check',
            'is_can_import',
            'state',
            'create_time'
        );

        $schema_field = array(
            'old_system_contract_sn',
            'idx',
            'initial_principal',
            'receivable_date',
            'receivable_principal',
            'receivable_interest',
            'receivable_operation_fee',
            'amount',
            'left_principal',
            'status',
            'paid_time'
        );





        echo "------- start -------- \n";

        $conn = ormYo::Conn();
        $conn->startTransaction();
        try{

            $Reader = new SpreadsheetReader($excel_file);

            $num_counter = 0;
            foreach( $Reader as $row_data ){
                $num_counter++;
                echo "Row: $num_counter \n";
                // 处理每行的数据
                $new_row = array();
                foreach( $row_data as $k=>$v ){
                    $v = trim($v,' ');
                    // NULL导出成了字符串的'NULL'
                    if( $v == 'NULL' ){
                        $v = null;
                    }
                    $new_row[$header[$k]] = $v;
                }
                $new_row['country_code'] = '855';
                $new_row['Phone_Number1'] = str_replace(' ','',$new_row['Phone_Number1']);
                $new_row['Phone_Number2'] = str_replace(' ','',$new_row['Phone_Number2']);
                $new_row['currency'] = $loan_currency;
                $new_row['operation_fee_rate'] = round($new_row['OperationFee']/$new_row['PrincipalAmount']*100,2);  // 0.2 %

                $contact_phone = null;
                if( $new_row['Phone_Number1'] ){
                    $phone_arr = tools::getFormatPhone($new_row['country_code'],$new_row['Phone_Number1']);
                    $contact_phone = $phone_arr['contact_phone'];
                }

                $contact_phone2 = null;
                if( $new_row['Phone_Number2'] ){
                    $phone_arr = tools::getFormatPhone($new_row['country_code'],$new_row['Phone_Number2']);
                    $contact_phone2 = $phone_arr['contact_phone'];
                }

                $c_sql = "INSERT INTO old_system_contract_import_task(".join(',',$contract_field).") VALUES ";

                $insert_data = array(
                    'old_client_name' => qstr($new_row['CustomerName']),
                    'old_client_cid' => qstr($new_row['CID']),
                    'country_code' =>qstr($new_row['country_code']),
                    'phone_number' => qstr($new_row['Phone_Number1']),
                    'contact_phone' =>qstr($contact_phone),
                    'phone_number2' => qstr($new_row['Phone_Number2']),
                    'contact_phone2' => qstr($contact_phone2),
                    'old_system_contract_sn' => qstr($new_row['Acc']),
                    'old_branch_code' => qstr($new_row['Branch']),
                    'loan_amount' => round($new_row['PrincipalAmount'],2),
                    'currency' => qstr($new_row['currency']),
                    'loan_term_month' => intval($new_row['NumberOfInstallment']),
                    'old_product_code' => qstr($new_row['ProductCode']),
                    'old_product_name' => qstr($new_row['ProductName']),
                    'open_date' => qstr(date('Y-m-d H:i:s',strtotime($new_row['OpenDate']))),
                    'end_date' => qstr(date('Y-m-d H:i:s',strtotime($new_row['MaturityDate']))),
                    'principal_balance'  => round($new_row['Balance'],2),
                    'interest_rate' => round($new_row['InterestRate'],2),
                    'operation_fee_rate' => round($new_row['operation_fee_rate'],2),
                    'contract_json' => qstr(json_encode($new_row)),
                    'is_need_import' => 1,
                    'is_need_check' => 0,
                    'is_can_import' => 1,
                    'state' => 0,
                    'create_time' => qstr(Now())
                );

                $c_sql .= " (".join(',',$insert_data)."); ";

                file_put_contents($contract_sql,$c_sql."\n",FILE_APPEND);
                /*$rt = $conn->execute($c_sql);
                if( !$rt->STS ){
                    $conn->rollback();
                    echo $rt->MSG;
                    die;
                }*/

                unset($insert_data);
                unset($c_sql);



                $s_sql = "insert into old_system_contract_installment_schema(".join(',',$schema_field).") values ";
                $schema_data = array(
                    'old_system_contract_sn' => qstr($new_row['Acc']),
                    'idx' => intval($new_row['InstSeq']),
                    'initial_principal' => round($new_row['BalanceForward'],2),
                    'receivable_date' => qstr(date('Y-m-d H:i:s',strtotime($new_row['DueDate']))),
                    'receivable_principal' => round($new_row['OriginalPrincipalAmount'],2),
                    'receivable_interest' => round($new_row['NormalInterestAmount'],2),
                    'receivable_operation_fee' => round($new_row['OperationFee'],2),
                    'amount' => round($new_row['TotalDue'],2),
                    'left_principal' => round($new_row['BalanceCarryForward'],2),
                    'status' => qstr($new_row['Status']),
                    'paid_time' => qstr($new_row['PaidDate']?date('Y-m-d H:i:s',strtotime($new_row['PaidDate'])):null)
                );
                $s_sql .= " (".join(',',$schema_data)."); ";

                file_put_contents($schema_sql,$s_sql."\n",FILE_APPEND);
                /*$rt = $conn->execute($s_sql);
                if( !$rt->STS ){
                    $conn->rollback();
                    echo $rt->MSG;
                    die;
                }*/

                unset($schema_data);
                unset($s_sql);

            }
            echo "cnt: $num_counter \n";

            $conn->submitTransaction();
            echo "\n success \n";

        }catch (Exception $e){
            $conn->rollback();
            echo $e->getMessage();
        }

        echo "------- end -------- \n";
    }


    public function scriptExecuteOp()
    {
        set_time_limit(0);
        ini_set("memory_limit", "1024M");

        $start_time = time();
        //$this->getDataSQLOp();
        $this->getDataSqlBySpread();
        $end_time = time();
        echo "\n";
        echo "Cost time:".($end_time-$start_time).'s';
        die;
    }


    public function getFormatDataOp()
    {


        $start_time = time();

        $file_name = 'B000_HO_KHR';

        $excel_file = CURRENT_ROOT.'/resource/old_system_contract/'.$file_name.'.xlsx';


        require_once BASE_CORE_PATH . '/phpExcel/PHPExcel.php';
        //require_once _CORE_PHP_. '/phpExcel/Classes/PHPExcel/IOFactory.php';
        require_once BASE_CORE_PATH . '/phpExcel/PHPExcel/Reader/Excel5.php';
//        require_once _CORE_PHP_. 'phpexcel/Classes/PHPExcel/Reader/Excel2003XML.php';
        require_once BASE_CORE_PATH . '/phpExcel/PHPExcel/Reader/Excel2007.php';

        $reader = new PHPExcel_Reader_Excel2007();
        $PHPExcel = $reader->load($excel_file);

        $currentSheet = $PHPExcel->getSheet(0);
        $allColumn = $currentSheet->getHighestColumn();
        $allRow = $currentSheet->getHighestRow();



        // 不保存大数组  todo 测试还是不行，一行行的读还是超出内存
        $conn = ormYo::Conn();
        $conn->startTransaction();
        try{

            for ($currentRow = 1; $currentRow <= $allRow; $currentRow++) {
                $rowData = $currentSheet->rangeToArray('A' . $currentRow . ':'. $allColumn . $currentRow, NULL, TRUE, FALSE);
                $rowData = $rowData[0];
                $sql = "insert into excel_contract_data(data) values ('".json_encode($rowData)."')";
                $rt = $conn->execute($sql);
                if( !$rt->STS ){
                    $conn->rollback();
                    echo $rt->MSG;
                    exit();
                }

            }

        }catch ( Exception $e ){
            $conn->rollback();
            echo $e->getMessage();
        }



        exit();
        die();
        // 读excel文件
        //$phpExcel = new PHPExcel();
        $rt = toolExcel::readExcelToArray($excel_file);
        //print_r($rt);
        if( $rt->STS ){
            $data = $rt->DATA;
            $text = "<?php \n";
            $text .= "return ";
            $text.= var_export($data,true);
            $text .= ";\n";

            $php_file = CURRENT_ROOT.'/resource/old_system_contract/'.$file_name.'.php';
            file_put_contents($php_file,$text);
            echo 'success';
            $end_time = time();
            echo "\n";
            echo "Cost time: ".($end_time-$start_time).'s';
        }


    }


    public function getFormatDataStep2Op()
    {
        die('OK');
        $php_file = CURRENT_ROOT.'/resource/import_contract/customerinfo.php';
        $data = @include($php_file);

        // 格式化数据，通过键值对的方式封装下数据
        $head = $data[0];
        unset($data[0]);

        $new_data = array();
        foreach( $data as $v ){
            $temp = array();
            foreach( $v as $key=>$value ){
                // 处理字符串两边的空格问题
                $temp[$head[$key]] = trim($value);
            }
            $new_data[] = $temp;
        }



        // 再格式化,把还款计划提出来，合同信息合并一个 Acc 账号代表合同号

        $product_arr = array();

        $contract_data = array();
        foreach( $new_data as $v ){

            if( !$product_arr[$v['ProductCode']]){
                $product_arr[$v['ProductCode']] = array(
                    'ProductCode' => $v['ProductCode'],
                    'ProductName' => $v['ProductName'],
                );
            }


            $contract_sn = $v['Acc'];

            $installment_schema = array(
                'DueWorkDate' => $v['DueWorkDate'],
                'InstSeq' => $v['InstSeq'],
                'DueDate' => $v['DueDate'],
                'PaidDate' => $v['PaidDate'],
                'BalanceForward' => round($v['BalanceForward'],2),
                'Status' => $v['Status'],
                'OriginalPrincipalAmount' => round($v['OriginalPrincipalAmount'],2),
                'NormalInterestAmount' => round($v['NormalInterestAmount'],2),
                'OperationFee' => round($v['OperationFee'],2),
                'PrincipalBalance' => round($v['PrincipalBalance'],2),
                'TotalDue' => round($v['TotalDue'],2),
                'BalanceCarryForward' => round($v['BalanceCarryForward'],2),
            );




            if( $contract_data[$contract_sn] ){
                $contract_data[$contract_sn]['installment_schema'][$v['InstSeq']] = $installment_schema;
            }else{

                // 年利率
                $operationFeeRate = ($installment_schema['OperationFee']/$v['PrincipalAmount'])*100*12;
                $v['operationFeeRate'] = round($operationFeeRate,2);

                $v['installment_schema'][$v['InstSeq']] = $installment_schema;
                $contract_data[$contract_sn] = $v;
            }
        }

        // 重新排下还款计划的顺序
        foreach( $contract_data as $k=>$v ){
            $schemas = $v['installment_schema'];
            ksort($schemas);
            $v['installment_schema'] = $schemas;

            $contract_data[$k] = $v;
        }


        $text = "<?php \n";
        $text .= "return ";
        $text.= var_export($contract_data,true);
        $text .= ";\n";

        $php_file = CURRENT_ROOT.'/resource/import_contract/customerinfo_format.php';
        file_put_contents($php_file,$text);

        print_r($contract_data);
    }


    public function getDataOp()
    {
        // 分段读
        set_time_limit(0);

        $part = 'c1';
        $excel_file = CURRENT_ROOT.'/resource/import_contract/'.$part.'.xlsx';

        require_once BASE_CORE_PATH . '/phpExcel/PHPExcel.php';

        //require_once BASE_CORE_PATH . '/phpExcel/PHPExcel/Reader/Excel5.php';
        //require_once BASE_CORE_PATH . '/phpExcel/PHPExcel/Reader/Excel2007.php';

        $reader = new PHPExcel_Reader_Excel2007();

        $PHPExcel = $reader->load($excel_file);
        $currentSheet = $PHPExcel->getSheet(0);
        $allColumn = $currentSheet->getHighestColumn();
        $allRow = $currentSheet->getHighestRow();

        echo $allRow.':'.$allColumn;

        $all = array();
        for ($currentRow = 1; $currentRow <= $allRow; $currentRow++) {
            $rowData = $currentSheet->rangeToArray('A' . $currentRow . ':'. $allColumn . $currentRow, NULL, TRUE, FALSE);
            $all[] = $rowData[0];
        }

        print_r($all);

        $text = "<?php \n";
        $text .= "return ";
        $text.= var_export($all,true);
        $text .= ";\n";

        $php_file = CURRENT_ROOT.'/resource/import_contract/'.$part.'.php';
        file_put_contents($php_file,$text);
    }
}