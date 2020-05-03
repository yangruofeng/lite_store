<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/5/3
 * Time: 16:23
 */
class orderControl extends wap_baseControl
{
    public function __construct()
    {
        parent::__construct();
        Tpl::setDir('order');
    }

    public function purchase_orderOp()
    {
        $page_number = intval($_GET['pageNumber'])?:1;
        $page_size = 100;
        $sales_order = orderClass::getPurchaseOrderPageList($page_number,$page_size);
        Tpl::output('list_data',$sales_order);
        Tpl::showPage('purchase.order.index');
    }

    public function addPurchaseOrderOp()
    {
        Tpl::output('header_title','采购订单');
        Tpl::showPage('purchase.order.add');
    }

    public function sales_orderOp()
    {
        $page_number = intval($_GET['pageNumber'])?:1;
        $page_size = 100;
        $sales_order = orderClass::getSalesOrderPageList($page_number,$page_size);

        Tpl::output('list_data',$sales_order);
        Tpl::showPage('sales.order.index');
    }

    public function addSalesOrderOp()
    {
        Tpl::output('header_title','销售订单');
        Tpl::showPage('sales.order.add');
    }

    public function addSalesOrderSubmitOp($p)
    {
        //return new result(false,'test',$p);
        $p['user_id'] = $this->user_id;
        $p['user_name'] = $this->user_name;

        try{
            $conn = ormYo::Conn();
            $conn->startTransaction();
            $rt = orderClass::addSalesOrder($p);
            if( $rt->STS ){
                $conn->submitTransaction();
            }else{
                $conn->rollback();
            }
            return $rt;

        }catch( Exception $e){
            return new result(false,$e->getMessage());
        }

    }

    public function addPurchaseOrderSubmitOp($p)
    {
        //return new result(false,'test',$p);
        $p['user_id'] = $this->user_id;
        $p['user_name'] = $this->user_name;

        try{
            $conn = ormYo::Conn();
            $conn->startTransaction();
            $rt = orderClass::addPurchaseOrder($p);
            if( $rt->STS ){
                $conn->submitTransaction();
            }else{
                $conn->rollback();
            }
            return $rt;

        }catch( Exception $e){
            return new result(false,$e->getMessage());
        }

    }
}