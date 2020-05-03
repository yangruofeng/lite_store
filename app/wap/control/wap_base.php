<?php
/**
 * Created by PhpStorm.
 * User: sahara
 * Date: 2019/1/10
 * Time: 13:37
 */
class wap_baseControl extends control
{
    protected $user_info;
    protected $user_id;
    protected $user_code;
    protected $user_name;

    public function __construct()
    {
        parent::__construct();
        Tpl::setLayout('weui_layout');
        $data = $this->checkLogin();
        $this->user_info = $data;
        $this->user_id = $this->user_info['uid'];
        $this->user_code = $this->user_info['user_code'];
        $this->user_name = $this->user_info['user_name'];
    }

    protected function checkLogin()
    {
        if (!getSessionVar("is_login") || !cookie("user_id")) {
            $ref_url = request_uri();
            $login_url = getWapUrl("login", "index", array("ref_url" => urlencode($ref_url)));
            @header('Location:' . $login_url);
            die();
        } else {
            return operator::getUserInfo();
        }
    }


    protected function showMsg($msg,$type=100)
    {
        Tpl::output('msg',$msg);
        Tpl::output('msg_type',$type);
        Tpl::showPage('msg','weui_layout','widget');
    }
}