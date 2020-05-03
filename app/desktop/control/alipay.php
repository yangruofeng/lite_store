<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/3/23
 * Time: 0:28
 */
class alipayControl
{
    private $config;
    public function __construct()
    {
        $this->config = getConf('allipay');
    }

    public function payOp()
    {
        $alipay_config = $this->config;



        require_once GLOBAL_ROOT.'/alipay.trade.page.pay/pagepay/service/AlipayTradeService.php';
        require_once GLOBAL_ROOT.'/alipay.trade.page.pay/pagepay/buildermodel/AlipayTradePagePayContentBuilder.php';

        //商户订单号，商户网站订单系统中唯一订单号，必填
        //$out_trade_no = time();
        $out_trade_no = $_GET['order_no'];
        $m_order = new main_orderModel();

        $order = $m_order->find(array(
            'order_no' => $out_trade_no
        ));
        if( !$order ){
            showMessage('没有找到订单');
        }

        //订单名称，必填
        $subject = '测算支付';

        //付款金额，必填
        $total_amount = round($order['order_amount'],2);

        //商品描述，可空
        $body = '八字测算';

        //构造参数
        $payRequestBuilder = new AlipayTradePagePayContentBuilder();
        $payRequestBuilder->setBody($body);
        $payRequestBuilder->setSubject($subject);
        $payRequestBuilder->setTotalAmount($total_amount);
        $payRequestBuilder->setOutTradeNo($out_trade_no);

        $aop = new AlipayTradeService($alipay_config);

        /**
         * pagePay 电脑网站支付请求
         * @param $builder .业务参数，使用buildmodel中的对象生成。
         * @param $return_url 同步跳转地址，公网可以访问
         * @param $notify_url 异步通知地址，公网可以访问
         * @return $response 支付宝返回的信息
         */
        $response = $aop->pagePay($payRequestBuilder,$alipay_config['return_url'],$alipay_config['notify_url']);

        //输出表单
        var_dump($response);
    }


    public function paymentNotifyOp()
    {
        $alipay_config = $this->config;
        require_once GLOBAL_ROOT.'/alipay.trade.page.pay/pagepay/service/AlipayTradeService.php';

        $arr=$_POST;
        $alipaySevice = new AlipayTradeService($alipay_config);
        debug('alipay_notify',$arr);
        $result = $alipaySevice->check($arr);

        /* 实际验证过程建议商户添加以下校验。
        1、商户需要验证该通知数据中的out_trade_no是否为商户系统中创建的订单号，
        2、判断total_amount是否确实为该订单的实际金额（即商户订单创建时的金额），
        3、校验通知中的seller_id（或者seller_email) 是否为out_trade_no这笔单据的对应的操作方（有的时候，一个商户可能有多个seller_id/seller_email）
        4、验证app_id是否为该商户本身。
        */
        if($result) {//验证成功
            /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //请在这里加上商户的业务逻辑程序代


            //——请根据您的业务逻辑来编写程序（以下代码仅作参考）——

            //获取支付宝的通知返回参数，可参考技术文档中服务器异步通知参数列表

            //商户订单号

            $app_id = $_POST['app_id'];
            if( $alipay_config['app_id'] != $app_id ){
                debug('alipay_notify','app id 不符合');
                echo "fail";die;
            }

            /*$seller_id = $_POST['seller_id'];
            if( $alipay_config['seller_id'] != $seller_id ){
                debug('alipay_notify','seller id 不符合');
                echo "fail";die;
            }*/


            $rt = orderClass::orderHandlerByAlipay($_POST);
            if( !$rt->STS ){
                debug('alipay_result',$rt);
                echo "fail";die;
            }
            echo "success";	//请不要修改或删除
            die;

            /*if($_POST['trade_status'] == 'TRADE_FINISHED') {

                //判断该笔订单是否在商户网站中已经做过处理
                //如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
                //请务必判断请求时的total_amount与通知时获取的total_fee为一致的
                //如果有做过处理，不执行商户的业务程序

                //注意：
                //退款日期超过可退款期限后（如三个月可退款），支付宝系统发送该交易状态通知
            }
            else if ($_POST['trade_status'] == 'TRADE_SUCCESS') {
                //判断该笔订单是否在商户网站中已经做过处理
                //如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
                //请务必判断请求时的total_amount与通知时获取的total_fee为一致的
                //如果有做过处理，不执行商户的业务程序
                //注意：
                //付款完成后，支付宝系统发送该交易状态通知
            }
            //——请根据您的业务逻辑来编写程序（以上代码仅作参考）——
            echo "success";	//请不要修改或删除*/

        }else {
            debug('alipay_verify',array('result'=>0));
            //验证失败
            echo "fail";

        }

    }

    public function repaymentRedirectOp()
    {
        $alipay_config = $this->config;
        require_once GLOBAL_ROOT.'/alipay.trade.page.pay/pagepay/service/AlipayTradeService.php';

        unset($_GET['act']);
        unset($_GET['op']);

        $arr=$_GET;
        debug($arr);
        $alipaySevice = new AlipayTradeService($alipay_config);
        $result = $alipaySevice->check($arr);

        /* 实际验证过程建议商户添加以下校验。
        1、商户需要验证该通知数据中的out_trade_no是否为商户系统中创建的订单号，
        2、判断total_amount是否确实为该订单的实际金额（即商户订单创建时的金额），
        3、校验通知中的seller_id（或者seller_email) 是否为out_trade_no这笔单据的对应的操作方（有的时候，一个商户可能有多个seller_id/seller_email）
        4、验证app_id是否为该商户本身。
        */
        if($result) {//验证成功
            /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //请在这里加上商户的业务逻辑程序代码

            //——请根据您的业务逻辑来编写程序（以下代码仅作参考）——
            //获取支付宝的通知返回参数，可参考技术文档中页面跳转同步通知参数列表

            //商户订单号
            $out_trade_no = htmlspecialchars($_GET['out_trade_no']);

            //支付宝交易号
            $trade_no = htmlspecialchars($_GET['trade_no']);

            //echo "验证成功<br />支付宝交易号：".$trade_no;

            $go_url = getDesktopUrl('order','orderDetail',array(
                'order_no' => $out_trade_no
            ));

            redirect($go_url);

        }
        else {
            //验证失败
            echo "验证失败";
        }
    }
}