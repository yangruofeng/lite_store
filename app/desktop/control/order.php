<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/3/19
 * Time: 21:21
 */
class orderControl extends desktop_baseControl
{
    public function __construct()
    {
        parent::__construct();
        Tpl::setLayout('main_layout');
        Tpl::setDir('order');
    }

    public function orderCreateOp($p)
    {
        // 获取用户role_id
        $p['price'] = 198.00;
        $p['discount_price'] = 29.80;  //29.80
        $p['role_id']= memberClass::getOrCreateRoleId();
        //return new result(false,'test',$p);
        $rt = orderClass::createOrder($p);
        return $rt;

    }

    public function orderPayOp(){

        $order_no = $_GET['order_no'];
        $m_order = new main_orderModel();
        $order = $m_order->getOrderInfoByOrderNo($order_no);
        if( !$order ){
            showMessage('没有找到订单信息。');
        }
        if( $order['is_paid'] ){
            $this->orderDetailOp();
            die;
        }
        Tpl::output('order_info',$order);
        Tpl::showPage('order.pay.v2');
    }

    public function orderListOp()
    {
        $role_id = memberClass::getOrCreateRoleId();
        $m_order = new main_orderModel();
        $order_list = $m_order->getOrderListByRoleId($role_id);
        //print_r($order_list);
        Tpl::output('order_list',$order_list);
        Tpl::showPage('order.list');
    }

    public function orderDetailOp()
    {
        $order_no = $_GET['order_no'];
        $m_order = new main_orderModel();
        $order = $m_order->find(array(
            'order_no'=>$order_no
        ));
        if( !$order ){
            showMessage('没有找到订单！');
        }

        Tpl::output('order_detail',$order);
        Tpl::showPage('order.detail.v2');
    }

    public function changeOrderPhoneOp($p)
    {
        $order_id = intval($p['order_id']);
        $phone_number = trim($p['phone_number']);
        if( !$phone_number ){
            return new result(false,'请输入电话号码！');
        }
        $re = checkPoneNumber($phone_number);
        if( !$re ){
            return new result(false,'请输入正确的电话号码！');
        }
        $m = new main_orderModel();
        $order = $m->getRow($order_id);
        if( !$order ){
            return new result(false,'订单不存在！');
        }
        $order->phone_number = $phone_number;
        $order->update_time = Now();
        $up = $order->update();
        if( !$up->STS ){
            return new result(false,'操作失败，请稍后重试！');
        }
        return new result(true,'操作成功！',$order);
    }
}