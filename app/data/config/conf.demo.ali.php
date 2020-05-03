<?php
/**
 * Created by PhpStorm.
 * User: sahara
 * Date: 2017/11/1
 * Time: 9:56
 */

$config['db_conf']=array(
    "db_loan"=>array(
        "db_type"=>"mysql",
        "db_host"=>"127.0.0.1",
        "db_user"=>"demo",
        "db_pwd"=>"demo-2018",
        "db_name"=>"lite_store",
        "db_port"=>3306
    )
);

$config['session'] = array(
    'save_handler' => 'files',
    'save_path' => BASE_DATA_PATH.'/session'
);

$config['debug']=true;
$config['site_name'] = 'Microbank';

$site_root_url = "http://store.iruofeng.cn/";

$config['site_root'] = $site_root_url;

$config['global_resource_site_url'] = "$site_root_url/resource";
$config['project_site_url'] = "$site_root_url/app";


$config['project_resource_url'] = "$site_root_url/app/resource";









