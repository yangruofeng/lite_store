<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/6/18
 * Time: 22:33
 */

$_GET['act'] = 'wxpay';
$_GET['op'] = 'paymentNotify';
require_once(dirname(__FILE__) . '/../index.php');
