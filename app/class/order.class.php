<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2020/5/3
 * Time: 17:28
 */
class orderClass
{

    public static function addSalesOrder($param)
    {
        $client_name = trim($param['client_name']);
        $order_desc = trim($param['order_desc']);
        $remark = trim($param['remark']);
        $price = round($param['order_price'],2);
        $user_id = intval($param['user_id']);
        $user_name = $param['user_name'];
        if( !$client_name || !$order_desc ){
            return new result(false,'请输入完整信息。');
        }
        if( $price <= 0 ){
            return new result(false,'请检查订单金额：'.$price);
        }

        // 插入order
        $m_order = new store_orderModel();
        $order = $m_order->newRow();
        $order->client_name = $client_name;
        $order->order_price = $price;
        $order->remark = $remark;
        $order->order_desc = $order_desc;
        $order->is_paid = 1;
        $order->paid_time = Now();
        $order->order_time = Now();
        $order->creator_id = $user_id;
        $order->creator_name = $user_name;
        $order->create_time = Now();
        $order->state = orderStateEnum::DONE;
        $rt = $order->insert();
        if( !$rt->STS ){
            return $rt;
        }

        $desc = '销售: '.$client_name.'->'.$order_desc;

        // 插入账户flow
        $rt = passbookClass::addStoreCashFlow(passbookTradeTypeEnum::SALE,
            1,$price,$desc,$remark);

        if( !$rt->STS ){
            return $rt;
        }

        return new result(true,'success');

    }

    public static function addPurchaseOrder($param)
    {
        $order_desc = trim($param['order_desc']);
        $remark = trim($param['remark']);
        $price = round($param['order_price'],2);
        $user_id = intval($param['user_id']);
        $user_name = $param['user_name'];
        if(  !$order_desc ){
            return new result(false,'请输入完整信息。');
        }
        if( $price <= 0 ){
            return new result(false,'请检查订单金额：'.$price);
        }

        // 插入order
        $m_order = new store_purchase_orderModel();
        $order = $m_order->newRow();
        $order->goods_id = 0;
        $order->goods_name = '采购';
        $order->amount = 1;
        $order->total_price = $price;
        $order->remark = $remark;
        $order->order_desc = $order_desc;
        $order->purchase_time = Now();
        $order->creator_id = $user_id;
        $order->creator_name = $user_name;
        $order->create_time = Now();
        $order->state = orderStateEnum::DONE;
        $rt = $order->insert();
        if( !$rt->STS ){
            return $rt;
        }

        $desc = '采购: '.$order_desc;

        // 插入账户flow
        $rt = passbookClass::addStoreCashFlow(passbookTradeTypeEnum::PURCHASE,
            -1,$price,$desc,$remark);

        if( !$rt->STS ){
            return $rt;
        }

        return new result(true,'success');

    }

    public static function getSalesOrderPageList($page_number=1,$page_size=0,$filter=[])
    {
        $sql = "select * from store_order where state='".orderStateEnum::DONE."'
        order by uid desc ";
        $r = new ormReader();
        $page_data = $r->getPage($sql,$page_number,$page_size);
        return array(
            'list' => $page_data->rows,
            'pageNumber' => $page_data->pageIndex,
            'pageSize' => $page_data->pageSize,
            'pageCount' => $page_data->pageCount,
            'totalCount' => $page_data->count
        );
    }

    public static function getPurchaseOrderPageList($page_number=1,$page_size=0,$filter=[])
    {
        $sql = "select * from store_purchase_order where state='".orderStateEnum::DONE."'
        order by uid desc ";
        $r = new ormReader();
        $page_data = $r->getPage($sql,$page_number,$page_size);
        return array(
            'list' => $page_data->rows,
            'pageNumber' => $page_data->pageIndex,
            'pageSize' => $page_data->pageSize,
            'pageCount' => $page_data->pageCount,
            'totalCount' => $page_data->count
        );
    }

}