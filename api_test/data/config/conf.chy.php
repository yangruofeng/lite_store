<?php
/**
 * Created by PhpStorm.
 * User: sahara
 * Date: 2017/11/2
 * Time: 14:22
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
$config['site_root'] = 'http://local.bank.com';
$config['global_resource_site_url'] = "http://local.bank.com/resource";
$config['project_resource_site_url'] = "http://local.bank.com/microbank/resource";

$config['entry_api_url'] = "http://local.bank.com/entry/api/v1";
$config['bank_api_url'] = "http://local.bank.com/microbank/api/v2";