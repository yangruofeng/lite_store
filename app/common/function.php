<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/3/19
 * Time: 21:33
 */

function getDesktopUrl($cls,$op,$param=array())
{
    return getUrl($cls,$op,$param,false,DESKTOP_SITE_URL);
}

function getWapUrl($cls,$op,$param=array())
{
    return getUrl($cls,$op,$param,false,WAP_SITE_URL);
}