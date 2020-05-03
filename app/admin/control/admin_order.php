<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/3/23
 * Time: 23:25
 */
class admin_orderControl extends admin_baseControl
{
    public function __construct()
    {
        parent::__construct();
        Tpl::setLayout('empty_layout');
        Tpl::setDir('order');
    }

    public function orderPaidOp()
    {
        Tpl::showPage('order.paid');
    }

    public function orderUnPaidOp()
    {
        Tpl::showPage('order.unpaid');
    }

    public function getOrderListOp($p)
    {
        $page_number = $p['pageNumber']?:1;
        $page_size = $p['pageSize']?:0;
        $page = orderClass::getOrderPageList($page_number,$page_size,$p);
        return $page;
    }

    public function confirmReceiptOp()
    {
        if( $_POST['form_submit'] == 'ok' ){
            $order_id = $_POST['order_id'];
            $m_order = new main_orderModel();
            $order = $m_order->getRow(array(
                'uid' => $order_id
            ));
            if( !$order ){
                showMessage('没有订单信息');
            }
            if( $order['is_paid'] ){
                showMessage('订单已支付');
            }
            $order->is_paid = 1;
            $order->paid_time = Now();
            $order->paid_way = $_POST['paid_way'];
            $order->state = orderStateEnum::PAID;
            $order->update_time = Now();
            $up = $order->update();
            if( !$up->STS ){
                showMessage('操作失败');
            }
            showMessage('操作成功',getBackOfficeUrl('admin_order','orderUnPaid'));
        }
        $order_id = $_GET['order_id'];
        $m_order = new main_orderModel();
        $order = $m_order->find(array(
            'uid' => $order_id
        ));
        if( !$order ){
            showMessage('没有订单信息');
        }
        if( $order['is_paid'] ){
            showMessage('订单已支付');
        }
        Tpl::output('order_info',$order);
        Tpl::showPage('order.confirm.receipt');
    }
}