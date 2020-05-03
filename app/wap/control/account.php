<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/5/3
 * Time: 17:23
 */
class accountControl extends wap_baseControl
{
    public function __construct()
    {
        parent::__construct();
        Tpl::setDir('account');
    }

    public function indexOp()
    {
        $user_info = $this->user_info;
        Tpl::output('user_info',$user_info);
        $store_account = passbookClass::getStoreBookAccount();
        Tpl::output('store_account',$store_account);
        Tpl::showPage('index');
    }
}