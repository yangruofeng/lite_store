<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/3/4
 * Time: 23:56
 */
class desktop_baseControl extends control
{

    public function __construct()
    {
        memberClass::getOrCreateRoleId();
    }
}