<?php
/**
 * Created by PhpStorm.
 * User: cdxx
 * Date: 2019-02-11
 * Time: 17:04
 */


$config['db_conf']=array(
    "db_loan"=>array(
        "db_type"=>"mysql",
        "db_host"=>"localhost",
        "db_user"=>"root",
        "db_pwd"=>"root",
        "db_name"=>"bank_local",
        "db_port"=>3306
    )
);

$config['debug']=true;
$config['site_root'] = 'http://localhost/member_bank';
$config['global_resource_site_url'] = "http://localhost/member_bank/resource";
$config['project_resource_site_url'] = "http://localhost/member_bank/microbank/resource";

$config['entry_api_url'] = "http://localhost/member_bank/entry/api/v1";
$config['bank_api_url'] = "http://localhost/member_bank/microbank/api/v2";