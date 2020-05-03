<?php

/**
 * Created by PhpStorm.
 * User: 43070
 * Date: 2017/10/16
 * Time: 10:44
 */
class entry_indexControl extends baseControl
{


    public function __construct()
    {
        parent::__construct();
        Tpl::setLayout("book_layout");
        Tpl::setDir("layout");
        Tpl::output("html_title", "后台");
        Tpl::output("user_info", $this->user_info);
        //菜单处理
        $menu_items = $this->getResetMenu();
        Tpl::output("menu_items", $menu_items);

    }

    public function indexOp()
    {

        Tpl::showPage("null_layout");
    }

}
