<div class="page__bd" style="height: 100%;">

    <div class="weui-tab">

        <div class="weui-tab__bd">
            <div id="tab1" class="weui-tab__bd-item weui-tab__bd-item--active">
                <h1>页面一</h1> </div>
            <div style="display: none;" id="tab2" class="weui-tab__bd-item">
                <h1>页面二</h1> </div>
            <div style="display: none;" id="tab3" class="weui-tab__bd-item">
                <?php include template('goods/index');?>
            </div>
            <div style="display: none;" id="tab4" class="weui-tab__bd-item">
                <h1>页面四</h1>
            </div>
        </div>

        <div class="weui-tabbar" id="tab_home">
            <a href="#tab1" class="weui-tabbar__item weui-bar__item_on">

                <div class="weui-tabbar__icon"><i class="fa fa-home "></i></div>

                <i class="weui_icon_msg weui_icon_success"></i>
                <p class="weui-tabbar__label">销售</p>

            </a>
            <a href="<?php echo getWapUrl('order','purchase_order'); ?>" class="weui-tabbar__item">

                <div class="weui-tabbar__icon"><i class="fa fa-home "></i></div>
                <i class="weui_icon_msg weui_icon_success"></i>
                <p class="weui-tabbar__label">采购</p>
            </a>
            <a href="#tab3" class="weui-tabbar__item">
                <div class="weui-tabbar__icon"><i class="fa fa-home "></i></div>
                <i class="weui_icon_msg weui_icon_success"></i>
                <p class="weui-tabbar__label">商品</p>
            </a>
            <a href="#tab4" class="weui-tabbar__item">
                <div class="weui-tabbar__icon"><i class="fa fa-home "></i></div>
                <i class="weui_icon_msg weui_icon_success"></i>
                <p class="weui-tabbar__label">我</p>
            </a>
        </div>
    </div>
</div>

<script>
    $(function(){
        $('#tab_home').find('.weui-tabbar__item').get(0).click();
    });
    weui.tab('#tab_home', {
        defaultIndex: 0,
        onChange: (index) => {
            $(".weui-tab__bd-item").eq(index).show().siblings().hide();
        }
        })
</script>