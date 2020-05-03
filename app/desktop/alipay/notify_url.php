<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/3/23
 * Time: 0:27
 */

$_GET['act'] = 'alipay';
$_GET['op'] = 'paymentNotify';
require_once(dirname(__FILE__) . '/../index.php');