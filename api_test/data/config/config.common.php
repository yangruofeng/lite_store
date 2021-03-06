<?php
//Notes: common, can be overrided
$config = array(
    "class_path_a" => array(),//需要搜索class的路径
    "register_shutdown_function" => "_shutdown_function",//default func for shutdown to check any error
    "SERVER_TIMEZONE" => "Asia/Phnom_Penh",//default timezone jinbian Time
    "session" => array(
        'save_handler' => 'files',
        'save_path' => BASE_DATA_PATH . DS . "session"
    ),
    "cache.expire" => 24*3600,
    "cache.type" => "file"
);

if (!@include(GLOBAL_ROOT . '/config.switch.override.tmp')) {
    $_switch_conf = "conf.dora";
}

$config_file = $_switch_conf . ".php";
if (!@include($config_file)) exit($config_file . ' isn\'t exists!');

