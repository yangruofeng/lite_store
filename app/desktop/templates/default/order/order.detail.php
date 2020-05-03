<style>
    .main-content{
        min-height: 1206px;
        background-image: url(<?php echo PROJECT_RESOURCE_SITE_URL.'/images/order/empty_bg.png'; ?>);
        background-repeat: no-repeat;
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

    .order-no{
        font-size: 1.5em;
        font-weight: 600;
        color:red;
    }

</style>

<div class="main-content">



    <div class="order-list  clearfix">

        <div class="order-item">
            <div class="title">
                <span class="t-m">在线付费</span>
                <span class="t-f">- <?php echo $product_type_lang[$order['product_type']]; ?></span>


            </div>
            <div class="content">
                <table class="table-no-style">
                    <tr>
                        <td>订单编号：</td>
                        <td class="text-left">
                            <span class="order-no"><?php echo $order['order_no']; ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td width="30%">
                            <span  class="order-label">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：</span>
                        </td>
                        <td width="70%" class="text-left">
                            <?php echo $order['client_name']; ?>
                            <?php if( $order['gender'] == genderEnum::FEMALE ){ ?>
                                <img class="gender" src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/order/female.png'; ?>" alt="">
                            <?php }else{ ?>
                                <img class="gender" src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/order/male.png'; ?>" alt="">

                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>出生年月：</td>
                        <td class="text-left"><?php echo $order['birthday_desc']; ?></td>
                    </tr>
                    <tr>
                        <td>下单时间：</td>
                        <td class="text-left"><?php echo $order['create_time']; ?></td>
                    </tr>
                    <tr>
                        <td>订单状态：</td>
                        <td class="text-left">
                            <?php if( $order['is_paid'] ){ ?>
                                <span class="green bold">已付款</span>
                            <?php }else{ ?>
                                <span class="red bold">未付款</span>
                            <?php } ?>
                        </td>
                    </tr>
                </table>
            </div>

        </div>


        <div class="text-center">
            <div>
                <label style="color: orange;">请添加老师微信获取详细测算结果</label>
            </div>
            <div>

                <?php if( $order['paid_way'] == paidWayEnum::WECHAT ){ ?>
                    <img style="display: inline-block;" class="img-responsive" src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/order/laoshi_weixin.png'; ?>" alt="">

                <?php }else{ ?>
                    <img style="display: inline-block;" class="img-responsive" src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/order/wx_2.jpg'; ?>" alt="">

                <?php } ?>

            </div>

        </div>



    </div>



</div>

