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
$order_list = $output['order_list'];
?>
<header class="header1">

    <table class="table" style="margin-bottom: 0;">
        <tr>
            <td width="30%" class="text-left">
                <a onclick="window.history.go('-1');"><i class="fa fa-chevron-left" style="font-size: 1.5em;cursor: pointer;" aria-hidden="true"></i></a>
            </td>
            <td width="40%" class="text-center">
                <label for="" style="font-size: 1.5em;">我的订单</label>
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


</style>

<div class="main-content">

    <div class="order-list  clearfix">

        <?php foreach( $order_list as $order ){ ?>
            <div class="order-item">
                <div class="title">
                    <span class="t-m">在线付费</span>
                    <span class="t-f">- <?php echo $product_type_lang[$order['product_type']]; ?></span>
                    <?php if( $order['is_paid'] ){ ?>
                        <span class="fr green bold">已付款</span>
                    <?php }else{ ?>
                        <span class="fr red bold">未付款</span>
                    <?php } ?>

                </div>
                <div class="content">
                    <table class="table-no-style">
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
                    </table>
                </div>
                <div class="footer">
                    <span class="f-title">订单编号：<?php echo $order['order_no']; ?></span>
                    <?php if( $order['is_paid'] ){ ?>
                        <a href="<?php echo getDesktopUrl('order','orderDetail',array(
                            'order_no' => $order['order_no']
                        )); ?>" class="fr f-link">查看详情 <i class="fa fa-angle-right"></i></a>

                    <?php }else{ ?>
                        <a href="<?php echo getDesktopUrl('order','orderPay',array(
                            'order_no' => $order['order_no']
                        )); ?>" class="fr f-link">去付款 <i class="fa fa-angle-right"></i></a>

                    <?php } ?>
                </div>
            </div>
        <?php } ?>



    </div>



</div>

