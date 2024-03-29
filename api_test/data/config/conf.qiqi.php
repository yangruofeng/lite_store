<?php
$config['db_conf']=array(
    "db_loan"=>array(
        "db_type"=>"mysql",
        "db_host"=>"localhost",
        "db_user"=>"root",
        "db_pwd"=>"",
        "db_name"=>"bank_local",
        "db_port"=>3306
    )
);

$config['debug']=true;
$config['site_root'] = 'http://localhost/microbank';
$config['global_resource_site_url'] = "http://localhost/microbank/resource";
$config['project_site_url'] = "http://localhost/microbank/microbank";
$config['upload_site_url'] = 'http://localhost/microbank/microbank/data/upload';
$config['entry_api_url'] = "http://localhost/microbank/entry/api/v1";

$config['bank_api_url'] = "http://localhost/microbank/microbank/api/v2";


