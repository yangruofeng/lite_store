<?php

class baseControl extends control
{
    public $user_id;
    public $user_name;
    public $user_info;
    public $auth_list;
    public $user_position;

    function __construct()
    {

        Tpl::setDir("authority");
    }


    /**
     * 根据权限获取menu
     * @return array
     */
    protected function getResetMenu()
    {
        return $this->getIndexMenu();
    }


    protected function getIndexMenu()
    {
        $indexMenu = array(
            'order' => array(
                "title" => '订单',
                'icon_key' => 'data_center',
                'child' => array(
                    array('args' => 'app/admin,admin_order,orderPaid', 'title' => '已付款'),
                    array('args' => 'app/admin,admin_order,orderUnPaid', 'title' => '未付款'),
                )
            ),
        );
        return $indexMenu;
    }




}
