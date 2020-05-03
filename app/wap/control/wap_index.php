<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/5/2
 * Time: 23:04
 */
class wap_indexControl extends wap_baseControl
{
    public function __construct()
    {
        parent::__construct();
        Tpl::setLayout('weui_layout');
        Tpl::setDir('index');
    }

    public function indexOp()
    {
       $url = getWapUrl('order','sales_order');
        redirect($url);
    }
}