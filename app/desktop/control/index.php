<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/3/4
 * Time: 23:57
 */
class indexControl extends desktop_baseControl
{
    public function __construct()
    {
        parent::__construct();
        Tpl::setLayout('main_layout');
        Tpl::setDir('main');
    }

    public function indexOp()
    {
        Tpl::setLayout('index_layout');
        Tpl::showPage('index');
    }

    public function caifuOp()
    {
        Tpl::showPage('caifu');
    }

    public function syOp()
    {
        Tpl::showPage('shiye');
    }

    public function mlOp()
    {
        Tpl::showPage('mingli');
    }

    public function hyOp()
    {
        Tpl::showPage('huiyin');
    }
}