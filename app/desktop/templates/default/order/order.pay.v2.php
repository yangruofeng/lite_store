<style>
    .main-content{
       /* min-height: 950px;*/
        background-image: url(<?php echo PROJECT_RESOURCE_SITE_URL.'/images/order/main_bg2.png'; ?>);
        /*background-repeat: no-repeat;*/
        -webkit-background-size:100%;
        background-size:100%;
        -o-background-size: 100%;
        padding-bottom: 50px;
        background-repeat: repeat-y;
    }

    .main-content .title{
        display: inline-block;
        margin: 0 auto;
        text-align: left;
        font-size: 1.2em;
        color: #c78022;
        margin-top: 20%;
    }

    .pay-content{
        margin-top: 0;
    }

    .pay-content .count-down{
        color: #692e2d;
        font-weight: 600;
    }

    .count-down .t-span{
        background-color: #c78022;
        padding: 4px 8px;
    }

    .pay-content .pay{
        margin-top: 50px;
    }

    .pay .weixin{
        width: 90%;
        margin: 0 auto;
        text-align: center;
        height: 60px;
        border-radius:60px;
        line-height: 60px;
        font-size: 2em;
        background-color: #24c524;
        color:#fff;
        cursor: pointer;
    }
    .pay .alipay{
        width: 90%;
        margin: 0 auto;
        text-align: center;
        height: 60px;
        border-radius:60px;
        line-height: 60px;
        font-size: 2em;
        background-color: #137dea;
        color:#fff;
        margin-top: 20px;
        cursor: pointer;
    }

    .j-box{
        background-color: #fcf8e3;
    }

    .j-box .j-item{
        margin-bottom: 10px;
    }

    #j1{
        background-image: url(<?php echo PROJECT_RESOURCE_SITE_URL.'/images/order/b1.png'; ?>);
        -webkit-background-size:100%;
        background-size:100%;
        -o-background-size: 100%;
        background-repeat: repeat-y;

    }
    #j2{
        background-image: url(<?php echo PROJECT_RESOURCE_SITE_URL.'/images/order/b2.png'; ?>);
        -webkit-background-size:100%;
        background-size:100%;
        -o-background-size: 100%;
        background-repeat: repeat-y;

    }
    #j3{
        background-image: url(<?php echo PROJECT_RESOURCE_SITE_URL.'/images/order/b3.png'; ?>);
        -webkit-background-size:100%;
        background-size:100%;
        -o-background-size: 100%;
        background-repeat: repeat-y;

    }
    #j4{
        background-image: url(<?php echo PROJECT_RESOURCE_SITE_URL.'/images/order/b4.png'; ?>);
        -webkit-background-size:100%;
        background-size:100%;
        -o-background-size: 100%;
        background-repeat: repeat-y;

    }
    .j-img{
        margin-top: 15%;
    }
</style>
<header class="header1">

    <table class="table" style="margin-bottom: 0;">
        <tr>
            <td width="30%" class="text-left">
                <a onclick="window.history.go('-1');"><i class="fa fa-chevron-left" style="font-size: 1.5em;cursor: pointer;" aria-hidden="true"></i></a>
            </td>
            <td width="40%" class="text-center">
                <label for="" style="font-size: 1.5em;">支付</label>
            </td>
            <td width="30%" class="text-right">
                <a href="<?php echo getDesktopUrl('index','index'); ?>" style="font-size: 1.2em;">
                    <i class="fa fa-home" style="font-size: 1.5em;"></i>
                </a>
            </td>
        </tr>
    </table>
</header>
<?php $order = $output['order_info']; ?>
<div class="text-center" >
    <img style="display: inline-block;" class="img-responsive"  src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/order/top.png'; ?>" alt="">

</div>
<div class="text-center" style="position: relative;">
    <img style="display: inline-block;" class="img-responsive"  src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/order/top2.png'; ?>" alt="">
    <div class="title" style="position: absolute;top:20%;text-align: center;width: 100%;">
        <div style="font-size: 1.5em;">我们已累计为</div>
        <div style="text-indent: 20px;text-align: center;" >
            <span style="color:#421550;">
                <span style="font-size: 3em;">208</span>
                余万
            </span>

        </div>
    </div>
</div>
<div class="main-content text-center clearfix">


   <!-- <div class="title">
        <div>我们已累计为</div>
        <div style="text-indent: 20px;">
            <span style="color:#421550;">
                <span style="font-size: 3em;">208</span>
                余万
            </span>
            <span>缘友服务</span>
        </div>
        <div>
            感谢您的选择！
        </div>
    </div>-->

    <div class="pay-content text-center">
        <div class="price-content">
            <div style="font-size: 1.5em;font-weight: 600;">
                <span style="color:#6d2d2c;">订单编号：</span>
                <span style="color:red;"><?php echo $order['order_no']; ?></span>
            </div>
            <div style="font-size: 1.5em;font-weight: 600;">
                <span style="color:#6d2d2c;">限时优惠价：</span>
                <span style="color:red;">¥ 29.80</span>
            </div>
            <div style="margin-top: 10px;">
                <span style="text-decoration: line-through;color:#c78022;font-size: 1.1em;">原价：¥ 198.00</span>
            </div>
            <div class="count-down" style="margin-top: 10px;">
                倒计时：<span id="t-hour" class="t-span">00</span> ：<span id="t-minute" class="t-span">00</span> ：<span id="t-seconds" class="t-span">00</span>
            </div>

            <?php if( !$order['phone_number'] ){ ?>
                <div style="margin-top: 10px;" id="submit_phone_div">
                    <form action="" class="form-inline clearfix" id="phone_frm">
                        <input style="max-width: 300px;" type="hidden" name="order_id" value="<?php echo $order['uid']; ?>">


                    </form>
                </div>
            <?php } ?>


        </div>
        <div class="pay">
            <div class="weixin">
                <a href="<?php echo getDesktopUrl('wxpay','pay',array(
                    'order_no' => $_GET['order_no']
                ));?>" style="color: #fff;text-decoration: none;">
                    <img  style="width: 50px;height: 50px;" src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/order/wechat.png'; ?>" alt="">微信支付

                </a>
            </div>
            <div class="alipay">
                <a href="<?php echo getDesktopUrl('alipay','pay',array(
                    'order_no' => $_GET['order_no']
                ));?>" style="color: #fff;text-decoration: none;">
                    <img  style="width: 50px;height: 50px;" src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/order/alipay.png'; ?>" alt="">支付宝支付

                </a>
            </div>
            <div class="text-center" style="margin-top: 100px;display: none;">
                <div style="font-size: 1.3em;font-weight: 600;">请添加微信获取测算结果</div>
                <a target="_blank" href="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/order/laoshi_weixin.png'; ?>">
                    <img style="width: 300px;height: 300px;" src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/order/laoshi_weixin.png'; ?>" alt="">
                </a>

            </div>
        </div>

        <div class="text-center" style="margin-top: 20px;">
            <img style="display: inline-block;" class="img-responsive"  src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/order/des.png'; ?>" alt="">

        </div>


    </div>

</div>

<div class="j-box">
    <div class="j-item" id="j1">
        <div class="text-center" >
            <a href="<?php echo getDesktopUrl('index','ml'); ?>">
                <img style="display: inline-block;" class="img-responsive j-img"  src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/order/j1.png'; ?>" alt="">

            </a>

        </div>
    </div>
    <div class="j-item" id="j2">
        <div class="text-center" >
            <a href="<?php echo getDesktopUrl('index','caifu'); ?>">
                <img style="display: inline-block;" class="img-responsive j-img"  src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/order/j2.png'; ?>" alt="">

            </a>

        </div>
    </div>
    <div class="j-item" id="j3">
        <div class="text-center" >
            <a href="<?php echo getDesktopUrl('index','sy'); ?>">
                <img style="display: inline-block;" class="img-responsive j-img"  src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/order/j3.png'; ?>" alt="">

            </a>

        </div>
    </div>
    <div class="j-item" id="j4">
        <div class="text-center" >
            <a href="<?php echo getDesktopUrl('index','hy'); ?>">
                <img style="display: inline-block;" class="img-responsive j-img"  src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/order/j4.png'; ?>" alt="">

            </a>

        </div>
    </div>

    <div style="height: 20px;margin-top: 20px;" >

    </div>
</div>

<div  class="text-center" style="margin-top: 50px;display: none;">
    <div style="font-size: 1.3em;font-weight: 600;">请添加微信获取测算结果</div>
    <a target="_blank" href="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/order/laoshi_weixin.png'; ?>">
        <img style="width: 300px;height: 300px;" src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/order/laoshi_weixin.png'; ?>" alt="">
    </a>

</div>



<script>
    var secondsInit = 1800;

    function SecondsToDate(calValue) {
        var secondTime = parseInt(calValue);
        var minuteTime = 0;
        var hourTime = 0;
        if(secondTime > 60) {


            hourTime = Math.floor(secondTime / 3600);
            secondTime = secondTime % 3600;

            minuteTime = Math.floor(secondTime / 60);
            secondTime = secondTime % 60;

        }

        if(hourTime < 10 ){
            hourTime = "0" + hourTime;
        }
        if(minuteTime < 10){
            minuteTime = "0" + minuteTime;
        }
        if(secondTime < 10){
            secondTime = "0" + secondTime;
        }

        var _t = {
            hour: hourTime,
            minute: minuteTime,
            second: secondTime
        };
        return _t;
    }

    changeTimeBalanch();
    var Timer = setInterval(changeTimeBalanch,1000);
    function changeTimeBalanch() {
        var _time = SecondsToDate(secondsInit);
        $('#t-hour').text(_time.hour);
        $('#t-minute').text(_time.minute);
        $('#t-seconds').text(_time.second);
        --secondsInit;
        if(secondsInit < 0){
            clearInterval(Timer);
        }
    }


    function submitPhone()
    {
        var values = getFormJson('#phone_frm');
        console.log(values);
        yo.loadData({
            _c: 'order',
            _m: 'changeOrderPhone',
            param:values,
            callback:function(_r){
                if(_r.STS ){
                    $('#submit_phone_div').hide();
                    alert('操作成功！',1);
                }else{
                    alert(_r.MSG,2);
                }
            }
        });
    }
</script>

