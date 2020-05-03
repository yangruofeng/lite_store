<?php

/**
 * Created by PhpStorm.
 * User: Seven
 * Date: 2017/10/30
 * Time: 16:00 PM
 */
class loginControl
{
    function __construct()
    {
        Tpl::setDir("login");
    }

    /**
     * 登录页面
     */
    function loginOp()
    {
        Tpl::output('login_sign', true);
        Tpl::showPage("login", "login_layout");
    }


    function ajaxLoginOp($p)
    {
        $data = array(
            'new_url' => ENTRY_DESKTOP_SITE_URL . DS . 'index.php'
        );
        $user_code = $p['user_code'];
        $user_password = $p['user_password'];
        $m_um_user = new userModel();
        $user = $m_um_user->find(array(
            "user_code" => $user_code,
        ));

        if (empty($user)) {
            return new result(false, '账号不存在！');
        }

        if ($user['user_status'] == 0) {
            return new result(false, '账号已封禁！');
        }

        if (empty($user) || $user['password'] != md5($user_password)) {
            return new result(false, '账号或密码错误！');
        }
        setSessionVar("user_info", $user);
        setSessionVar("admin_is_login", "ok");

        setcookie('user_id',$user['uid'],time()+24*3600);

        return new result(true,'test',$data);
    }


    /**
     * 退出
     */
    function loginOutOp()
    {
        session_start();
        $user_id = $_SESSION['user_info']['uid'];
        unset($_SESSION['user_info']);
        unset($_SESSION['admin_is_login']);
        setcookie('user_id',0,time()-10);
        session_write_close();
        $login_url = getUrl("login", "login", array(), false, ENTRY_DESKTOP_SITE_URL);
        @header('Location:' . $login_url);
    }

}