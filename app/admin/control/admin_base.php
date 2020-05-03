<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/3/23
 * Time: 23:24
 */
class admin_baseControl extends control
{
    public function __construct()
    {
        $user_info = $this->checkLogin();
    }

    protected function checkLogin()
    {
        if ( !getSessionVar("admin_is_login") || !getSessionVar("user_info")) {
            $ref_url = request_uri();
            $login_url = getUrl("login", "login", array("ref_url" => urlencode($ref_url)), false, ENTRY_DESKTOP_SITE_URL);

            $script = '<script>top.location.href="'.$login_url.'"</script>';
            //@header('Location:' . $login_url);
            echo $script;
            die();
        } else {
            return operator::getUserInfo();
        }
    }
}