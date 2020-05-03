<style>
    .main-content{
        min-height: 1206px;
        background-image: url(<?php echo PROJECT_RESOURCE_SITE_URL.'/images/order/empty_bg.png'; ?>);
        background-repeat: repeat-y;
        -webkit-background-size:100%;
        background-size:100%;
        -o-background-size: 100%;
        padding-top: 20px;
    }

    .gender{
        margin-left: 5px;
        width: 20px;
        height: 20px;
    }

</style>
<?php
$product_type_lang = enum_langClass::getProductTypeLang();
$order = $output['order_detail'];
?>
<header class="header1">

    <table class="table" style="margin-bottom: 0;">
        <tr>
            <td width="30%" class="text-left">
                <a href="<?php echo getDesktopUrl('order','orderList'); ?>"><i class="fa fa-chevron-left" style="font-size: 1.5em;cursor: pointer;" aria-hidden="true"></i></a>
            </td>
            <td width="40%" class="text-center">
                <label for="" style="font-size: 1.5em;">订单详情</label>
            </td>
            <td width="30%" class="text-right">
                <a href="<?php echo getDesktopUrl('index','index'); ?>" style="font-size: 1.2em;">
                    <i class="fa fa-home" style="font-size: 1.5em;"></i>
                </a>
            </td>
        </tr>
    </table>
</header>
<style>

    .main-content{
        background-color: #fff6f6;
    }

    .order-no{
        font-size: 1.5em;
        font-weight: 600;
        color:red;
    }

    .order-item .content{
        background-color: #ffe9c4;
    }

    .order-table tr td{
        padding: 20px 0 !important;
        font-size: 1.2em;
        font-weight: 600;
        color:#513232;
    }

    .wx-title{
        padding: 15px 0;
        color:#f50b0b;
        font-size: 1.8em;
        font-weight: 500;
    }

    .hotline{
        padding: 20px 0;
        font-size: 1.8em;
        font-weight: 500;
        color:#eaa21e;
    }

</style>

<div style="display: none;">

    <audio id="audio" preload="auto"  controls autoplay  src="<?php echo PROJECT_RESOURCE_SITE_URL.'/audio/yy.mp3'; ?>">
    </audio>

</div>

<div class="main-content">


    <div class="text-center">
        <img class="img-responsive" style="display: inline-block" src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/order/od1.png'; ?>" alt="">
    </div>

    <div class="text-center">
        <a id="play_img" style="cursor: pointer;" onclick="play();">
            <img class="img-responsive" style="display: inline-block" src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/order/od2.png'; ?>" alt="">
        </a>
    </div>

    <div class="order-list  clearfix">

        <div class="order-item" style="margin-bottom: 0;">

            <div class="content">
                <table class="table-no-style order-table" >

                    <tr>
                        <td width="30%">
                            <span  class="order-label">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</span>
                        </td>
                        <td width="70%" class="text-left">
                            <?php echo $order['client_name']; ?>

                        </td>
                    </tr>
                    <tr>
                        <td>性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：</td>
                        <td class="text-left">
                            <?php if( $order['gender'] == genderEnum::FEMALE ){ ?>
                                女
                            <?php }else{ ?>
                               男
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>订单编号：</td>
                        <td class="text-left">
                            <span class="order-no"><?php echo $order['order_no']; ?></span>
                        </td>
                    </tr>

                </table>
            </div>

        </div>

    </div>

    <div class="text-center" style="margin-top: 5px;">
        <div class="wx-title">
            请添加老师微信获取详细测算结果
        </div>
        <div>

            <?php if( $order['paid_way'] == paidWayEnum::WECHAT ){ ?>
                <img style="display: inline-block;" class="img-responsive" src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/order/laoshi_weixin.png'; ?>" alt="">

            <?php }else{ ?>
                <img style="display: inline-block;" class="img-responsive" src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/order/wx_2.jpg'; ?>" alt="">

            <?php } ?>

        </div>

    </div>

    <div class="text-center hotline">
        若添加过程中出现疑问请致电您的专属客服热线<br />
        19981775185(客户24H在线)
    </div>


    <div>
        <div style="color:red;text-align: center;font-weight: bold;">
            更多信息请关注公众号 &nbsp;&nbsp; “扶摇心文化”
        </div>
        <div class="text-center" style="margin-top: 20px;">
            <img class="img-responsive" style="display: inline-block" src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/order/gzh.png'; ?>" alt="">
        </div>
    </div>


</div>





<script>

    var AUDIO = document.getElementById('audio');
    AUDIO.load();



    function play()
    {
        if(AUDIO.paused){
            AUDIO.play();
        }else{
            AUDIO.pause();
        }

    }

   /* AUDIO.addEventListener("canplay", function(){//监听audio是否加载完毕，如果加载完毕，则读取audio播放时间
        AUDIO.play();
    });
*/

    $(function(){

        setTimeout(function(){
            play();
        },2000);
    });




</script>