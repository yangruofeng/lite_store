<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/5/3
 * Time: 15:33
 */
class goodsClass
{
    public static function addClass($class_name,$user_id=0,$user_name='')
    {
        if( !$class_name ){
            return new result(false,'请输入分类名称！');
        }
        $m = M('store_goods_class');
        $row = $m->getRow(array(
            'class_name' => $class_name
        ));
        if( $row ){
            return new result(false,'分类已经存在');
        }
        $row = $m->newRow();
        $row->class_name = $class_name;
        $row->state = 1;
        $row->creator_id = $user_id;
        $row->creator_name = $user_name;
        $row->create_time = Now();
        $rt = $row->insert();
        if( !$rt->STS ){
            return $rt;
        }
        return new result(true,'success',$row);
    }

    public static function getGoodsClassList()
    {
        $m = M('store_goods_class');
        $list = $m->select(array(
            'state' => 1
        ));
        return $list;
    }

    public static function getClassInfo($class_id)
    {
        $m = M('store_goods_class');
        return $m->find($class_id);
    }

    public static function addGoods($param)
    {
        $class_id = intval($param['class_id']);
        $goods_name = trim($param['goods_name']);
        $cnt = intval($param['stock_cnt']);
        $user_id = intval($param['user_id']);
        $user_name = $param['user_name'];

        $class_info = self::getClassInfo($class_id);
        if( !$class_info ){
            return new result(false,'请选择分类。');
        }

        if( !$goods_name ){
            return new result(false,'请输入商品名。');
        }

        $m_goods = new store_goodsModel();
        $old_goods = $m_goods->find(array(
            'class_id' => $class_id,
            'goods_name' => $goods_name
        ));
        if( $old_goods ){
            return new result(false,'商品已经存在。');
        }
        $goods = $m_goods->newRow();
        $goods->class_id = $class_id;
        $goods->class_name = $class_info['class_name'];
        $goods->goods_name = $goods_name;
        $goods->state = 1;
        $goods->creator_id = $user_id;
        $goods->creator_name = $user_name;
        $goods->create_time = Now();
        $goods->stock_cnt = $cnt;
        $rt = $goods->insert();
        if( !$rt->STS ){
            return $rt;
        }

        return new result(true,'success',$goods);

    }

}