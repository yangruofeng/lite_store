<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/6/18
 * Time: 22:24
 */
class wxpayControl extends desktop_baseControl
{
    public function __construct()
    {
        parent::__construct();
        Tpl::setLayout('main_layout');
        Tpl::setDir('wx');

    }

    public function payOp()
    {
        require_once GLOBAL_ROOT."/wx.pay/lib/WxPay.Api.php";
        require_once GLOBAL_ROOT."/wx.pay/example/WxPay.NativePay.php";
        require_once GLOBAL_ROOT.'/wx.pay/example/log.php';


        //$logHandler= new CLogFileHandler("../logs/".date('Y-m-d').'.log');
        //$log = Log::Init($logHandler, 15);

        $param = $_GET;

        $out_trade_no = $param['order_no'];
        $m_order = new main_orderModel();

        $order = $m_order->find(array(
            'order_no' => $out_trade_no
        ));
        if( !$order ){
            showMessage('没有找到订单');
        }

        if( $order['is_paid'] ){
            (new orderControl())->orderDetailOp();
            die;
        }

        $order_amount = intval($order['order_amount']*100);  // 单位分

        $notify = new NativePay();

        $notify_url = DESKTOP_SITE_URL.'/wxpay/notify.php';

        $input = new WxPayUnifiedOrder();
        $input->SetBody("测算支付");
        $input->SetAttach("八字测算");
        $input->SetOut_trade_no($out_trade_no);
        $input->SetTotal_fee($order_amount);  // 单位是分
        $input->SetTime_start(date("YmdHis"));
        $input->SetTime_expire(date("YmdHis", time() + 600));
        $input->SetGoods_tag("精批");
        $input->SetNotify_url($notify_url);
        $input->SetTrade_type("NATIVE");
        $input->SetProduct_id("1");

        $result = $notify->GetPayUrl($input);
        $url2 = $result["code_url"];

        Tpl::output('order_info',$order);
        Tpl::output('code_url',$url2);
        Tpl::showPage('wx.pay');

    }

    public function getQRImageOp()
    {
        require_once BASE_CORE_PATH.'/phpqrcode.php';
        $url = urldecode($_GET["data"]);
        if(substr($url, 0, 6) == "weixin"){
            QRcode::png($url,false,QR_ECLEVEL_Q,9);
        }else{
            header('HTTP/1.1 404 Not Found');
        }
    }

    public function paymentNotifyOp()
    {
        unset($_GET['act']);
        unset($_GET['op']);
        wxClass::payNotify();
    }

    public function queryOrderOp($p)
    {
        $uid = $p['uid'];

        $m_order = new main_orderModel();

        $order = $m_order->find(array(
            'uid' => $uid
        ));
        if( !$order ){
            return new result(false);
        }


        return new result(true,'success',array(
            'is_paid' => $order['is_paid']
        ));

    }
}