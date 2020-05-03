<?php
$order_info = $output['order_info'];
?>

<style>
    #wx_pay_div{
        width: 95%;
        margin: 0 auto;
        padding: 0 20px;
        padding-bottom: 20px;
        border: solid 1px #eee;
        margin-bottom: 20px;
        margin-top: 20px;;
    }

    .wx-des{
        padding: 10px 20px;
        border: solid 2px #ef531ad4;
        margin-top: 20px;
    }
</style>
<header class="header1">

    <table class="table" style="margin-bottom: 0;">
        <tr>
            <td width="30%" class="text-left">
                <a onclick="window.history.go('-1');"><i class="fa fa-chevron-left" style="font-size: 1.5em;cursor: pointer;" aria-hidden="true"></i></a>
            </td>
            <td width="40%" class="text-center">
                <label for="" style="font-size: 1.5em;">微信支付</label>
            </td>
            <td width="30%" class="text-right">
                <a href="<?php echo getDesktopUrl('index','index'); ?>" style="font-size: 1.2em;">
                    <i class="fa fa-home" style="font-size: 1.5em;"></i>
                </a>
            </td>
        </tr>
    </table>
</header>

<div class="text-center" id="wx_pay_div" style="">

    <div class="text-left" style="
    padding: 10px 20px;">
        <h3 style="font-weight: bold;">
            收银台
        </h3>

        <div style="background-color: #eee;padding: 10px 20px;">
             <span class="text-right" style="float: right;margin-top: 10px;font-size: 1.5em;">
                应付金额： ¥ <?php echo $order_info['order_amount'];?>
            </span>
            <p>测算人：<?php echo $order_info['client_name']; ?></p>
            <p>订单号：<?php echo $order_info['order_no']; ?></p>
        </div>

        <div class="text-left wx-des" style="">
            <img src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/wx/WePayLogo.png'; ?>" alt="" style="width: 120px;">
            <img src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/wx/label.png'; ?>" alt="" style="width: 60px;">
            <span>亿万用户选择，更快更安全</span>

            <span style="float: right;">支付 <span style="color:orangered">
                    <?php echo $order_info['order_amount'];?></span>元
            </span>

        </div>


        
    </div>
    <div>

        <img alt="二扫码支付" src="<?php
        echo getDesktopUrl('wxpay','getQRImage',array(
            'data' => urlencode($output['code_url'])
        ));
        ?>" style="width:320px;height:320px;"/>
        <div>
            <img src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/wx/des.png'; ?>" alt="" style="width: 260px;" />
        </div>
    </div>


</div>

<div style="height: 20px;">

</div>

<script>
    $(function(){
        var param = {};
        param.uid = '<?php echo $order_info['uid']; ?>';
        setInterval(function(){
            yo.loadData({
                _c:'wxpay',
                _m:'queryOrder',
                param:param,
                callback:function(_r){
                    console.log( _r);
                    if( _r.STS  ){
                        var data = _r.DATA;
                        if( data.is_paid == 1 ){
                            window.location.href = '<?php echo getDesktopUrl('order','orderDetail',array(
                                'order_no' => $order_info['order_no']
                            )); ?>';
                        }

                    }
                }
            });
        },3000);
    });
</script>