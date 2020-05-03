<?php

class loginControl
{
    public function __construct()
    {
        Language::read('act,label,tip');
        Tpl::setLayout('weui_layout');
        Tpl::setDir('login');
    }

    public function indexOp()
    {
        Tpl::output('html_title', L('act_login'));
        Tpl::showPage('login_new');
    }

    public function loginOp($p)
    {
        return userClass::userLogin($p);
    }



    public function forgotPasswordOp()
    {
        Tpl::output('html_title', L('act_forgot_password'));
        Tpl::output('header_title', L('act_forgot_password'));
        Tpl::showPage('forgot_pwd');
    }

}
