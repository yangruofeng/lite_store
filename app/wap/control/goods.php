<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/5/3
 * Time: 13:23
 */
class goodsControl extends wap_baseControl
{
    public function __construct()
    {
        parent::__construct();
        Tpl::setDir('goods');
    }

    public function indexOp()
    {
        Tpl::showPage('goods.index');
    }

    public function goodsClassOp()
    {
        $class_list = goodsClass::getGoodsClassList();
        Tpl::output('class_list',$class_list);
        Tpl::output('header_title','商品分类');
        Tpl::showPage('goods.class.list');
    }

    public function addClassOp()
    {
        Tpl::output('header_title','添加分类');
        Tpl::showPage('add.class.index');
    }

    public function addClassSubmitOp($p)
    {
        $class_name = trim($p['class_name']);
        if( !$class_name ){

        }
        $rt = goodsClass::addClass($class_name,$this->user_id,$this->user_name);
        return $rt;

    }

    public function goodsListOp()
    {
        $m = new store_goodsModel();
        $list = $m->getGoodsList();
        Tpl::output('goods_list',$list);
        Tpl::output('header_title','商品列表');
        Tpl::showPage('goods.list');
    }

    public function addGoodsOp()
    {
        $class_list = goodsClass::getGoodsClassList();
        Tpl::output('class_list',$class_list);
        Tpl::output('header_title','添加商品');
        Tpl::showPage('goods.add');
    }

    public function addGoodsSubmitOp($p)
    {
        $p['user_id'] = $this->user_id;
        $p['user_name'] = $this->user_name;
        $rt = goodsClass::addGoods($p);
        return $rt;
    }
}