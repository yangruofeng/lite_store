<?php
/**
 * Created by PhpStorm.
 * User: sahara
 * Date: 2018/7/25
 * Time: 16:57
 */
class auto_toolControl
{

    public function getAllTradingCodeOp()
    {
        $file_path = _APP_CLASS_.'/passbook/trading';
        $file_array = array();
        $trade_code = array();
        if( is_dir($file_path)){
            $ls = scandir($file_path);
            foreach( $ls as $path ){
                if( substr($path,0,1) === '.'){
                    continue;
                }

                $file_array[] = $path;

                // 得到code
                $prefix = substr($path,0,strpos($path,'.trading.class.php'));
                $prefix = trim($prefix,'.');
                $code = strtolower(str_replace('.','_',$prefix));
                $trade_code[$code] = ucwords(str_replace('_',' ',$code));
            }
        }

       // var_export($trade_code);
       // var_export($file_array);

        $config_enum = global_settingClass::getAllTradingType();
        //print_r($config_enum);
        $new = array_merge($trade_code,$config_enum);
        var_export($new);
    }


    public function updateMemberNameOp()
    {
        $member_id = 1567;
        $en_family_name = 'CHAN';
        $en_first_name = 'KHUTHEA';
        $en_name = 'CHAN KHUTHEA';

        $init = strtoupper(substr($en_name,0,1));

        $kh_family_name = "ចាន់";
        $kh_first_name = "គន្ធា";
        $kh_name = "ចាន់ គន្ធា";

        $alis_name = json_encode(array(
            'en' => $en_name,
            'kh' => $kh_name,
            'zh_cn' => ''
        ));
        // female  male
        $gender = memberGenderEnum::FEMALE;

        $sql = "update client_member set family_name='$en_family_name',
          given_name='$en_first_name',initials='$init',display_name='$en_name',
          kh_display_name='$kh_name',alias_name='$alis_name'
          ,gender='$gender'
          where uid=$member_id";

        echo $sql;
    }
}