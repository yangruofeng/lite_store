<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/5/3
 * Time: 12:48
 */
class userClass
{
    public static function userLogin($params)
    {

        $user_account = $params['account'];
        $password = $params['password'];
        $is_remember = $params['is_remember'];

        $m_user = new um_userModel();
        $user_info = $m_user->find(array(
            'user_code' => $user_account
        ));
        if( !$user_info ){
            return new result(false,'用户不存在!');
        }
        if( $user_info['user_status'] != 1 ){
            return new result(false,'用户被锁定!');
        }

        if( $user_info['password'] != md5($password) ){
            return new result(false,'账户或密码错误！');
        }

        setSessionVar("user_id", $user_info['uid']);
        setSessionVar("is_login", 1);

        setNcCookie('is_login',1);
        if( $is_remember ){
            setNcCookie('user_id', $user_info['uid'],3600*24*7);
        }else{
            setNcCookie('user_id', $user_info['uid'],3600*24);
        }

        return new result(true,'success');
    }
}