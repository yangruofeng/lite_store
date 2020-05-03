<?php
defined('InKHBuy') or exit('Access Invalid!');

$config['db_conf']=array(
    "db_local"=>array(
        "db_type"=>"mysql",
        "db_host"=>"localhost",
        "db_user"=>"root",
        "db_pwd"=>"root",
        "db_name"=>"bank_local",  // micbank bank_demo bank_live
        "db_port"=>3306
    ),
    "db_remote" => array(
        "db_type"=>"mysql",
        "db_host"=>"47.88.189.36",
        "db_user"=>"demo",
        "db_pwd"=>"Ace-2015",
        "db_name"=>"bank_dev",
        "db_port"=>3306
    )
);
$config['author'] = "May";
$config['debug']=true;
$config['session'] = array(
    'save_handler' => 'files',
    'save_path' => BASE_DATA_PATH . DS . "session"
);

$config['global_resource_site_url'] = "http://localhost/member_bank/resource";




