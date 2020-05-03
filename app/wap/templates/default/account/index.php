
<?php
$user_info = $output['user_info'];
$store_account = $output['store_account'];
?>
<div class="page__bd" style="height: 100%;">

    <div class="weui-tab">

        <div class="weui-tab__bd">

            <div class="weui-panel weui-panel_access">
                <div class="weui-panel__hd"></div>
                <div class="weui-panel__bd">
                    <a href="javascript:" class="weui-media-box weui-media-box_appmsg">
                        <div class="weui-media-box__hd">
                            <img class="weui-media-box__thumb" src="<?php echo WAP_SITE_URL.'/resource/image/default_avatar.png'; ?>" alt="">
                        </div>
                        <div class="weui-media-box__bd">
                            <h4 class="weui-media-box__title"><?php echo $user_info['user_code']; ?></h4>
                            <p class="weui-media-box__desc"><?php echo $user_info['user_name']; ?></p>
                        </div>
                    </a>

                </div>
                <div class="weui-panel__ft">

                </div>
            </div>

            <div class="weui-cells">
                <a class="weui-cell  weui-cell_access" href="javascript:">
                    <div class="weui-cell__bd">
                        <p>账户余额</p>
                    </div>
                    <div class="weui-cell__ft"><em><?php echo ncPriceFormat($store_account['balance']); ?></em></div>
                </a>

            </div>

        </div>

        <div class="weui-tabbar" id="tab_home">
            <a href="<?php echo getWapUrl('order','sales_order'); ?>" class="weui-tabbar__item ">

                <div class="weui-tabbar__icon"><i class="fa fa-home "></i></div>

                <i class="weui_icon_msg weui_icon_success"></i>
                <p class="weui-tabbar__label">销售</p>

            </a>
            <a href="<?php echo getWapUrl('order','purchase_order'); ?>" class="weui-tabbar__item ">

                <div class="weui-tabbar__icon"><i class="fa fa-home "></i></div>
                <i class="weui_icon_msg weui_icon_success"></i>
                <p class="weui-tabbar__label">采购</p>
            </a>

            <a href="<?php echo getWapUrl('account','index'); ?>" class="weui-tabbar__item weui-bar__item_on">
                <div class="weui-tabbar__icon"><i class="fa fa-home "></i></div>
                <i class="weui_icon_msg weui_icon_success"></i>
                <p class="weui-tabbar__label">我</p>
            </a>
        </div>
    </div>
</div>

<script>

</script>