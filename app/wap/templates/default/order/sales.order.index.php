
<?php
$list_data = $output['list_data'];
?>
<div class="page__bd" style="height: 100%;">

    <div class="weui-tab">

        <div class="weui-tab__bd">

            <div class="button-sp-area cell" style="margin-top: 5px;">
                <a href="<?php echo getWapUrl('order','addSalesOrder'); ?>" class="weui-btn weui-btn_primary">
                    <i class="fa fa-plus"></i>添加</a>
            </div>

            <div class="order-list" style="max-height: 1200px;overflow-y: auto;">

                <?php foreach( $list_data['list'] as $item ){ ?>
                    <div class="weui-form-preview">
                        <div class="weui-form-preview__hd">
                            <div class="weui-form-preview__item">
                                <label class="weui-form-preview__label">订单金额</label>
                                <em class="weui-form-preview__value">¥<?php echo ncPriceFormat($item['order_price']); ?></em>
                            </div>
                        </div>
                        <div class="weui-form-preview__bd">
                            <div class="weui-form-preview__item">
                                <label class="weui-form-preview__label">客户名称</label>
                                <span class="weui-form-preview__value"><?php echo $item['client_name']; ?></span>
                            </div>
                            <div class="weui-form-preview__item">
                                <label class="weui-form-preview__label">订单明细</label>
                                <span class="weui-form-preview__value"><?php echo $item['order_desc']; ?></span>
                            </div>
                            <div class="weui-form-preview__item">
                                <label class="weui-form-preview__label">备注</label>
                                <span class="weui-form-preview__value"><?php echo $item['remark']; ?></span>
                            </div>
                            <div class="weui-form-preview__item">
                                <label class="weui-form-preview__label">时间</label>
                                <span class="weui-form-preview__value"><?php echo $item['order_time']; ?></span>
                            </div>
                        </div>
                        <!-- <div class="weui-form-preview__ft">
                             <a class="weui-form-preview__btn weui-form-preview__btn_primary" href="javascript:">操作</a>
                         </div>-->
                    </div>
                <?php } ?>

                <div class="page-div" style="margin-top: 10px;">
                    <div class="weui-flex">
                        <div class="weui-flex__item">
                            <div class="placeholder" style="text-align: center">

                                <?php if( $list_data['pageNumber'] <=1 ){ ?>
                                    <a href="javascript:;" class="weui-btn weui-btn_mini weui-btn_primary
                                     weui-btn_disabled ">上一页</a>

                                <?php }else{ ?>

                                    <a href="<?php echo getWapUrl('order','sales_order',[
                                        'pageNumber' => $list_data['pageNumber']-1
                                    ]); ?>" class="weui-btn weui-btn_mini weui-btn_primary
                                     ">上一页</a>

                                <?php } ?>

                            </div>
                        </div>
                        <div class="weui-flex__item">
                            <div class="placeholder" style="text-align: center">
                                <span>页码：<?php echo $list_data['pageNumber']; ?>/<?php echo $list_data['pageCount']; ?></span>
                            </div>
                        </div>
                        <div class="weui-flex__item">
                            <div class="placeholder" style="text-align: center">

                                <?php if( $list_data['pageNumber']>=$list_data['pageCount'] ){ ?>
                                    <a href="javascript:;" class="weui-btn weui-btn_mini weui-btn_primary
                                     weui-btn_disabled ">下一页</a>

                                <?php }else{ ?>

                                    <a href="<?php echo getWapUrl('order','sales_order',[
                                        'pageNumber' => $list_data['pageNumber']+1
                                    ]); ?>" class="weui-btn weui-btn_mini weui-btn_primary
                                     ">下一页</a>


                                <?php } ?>

                            </div>
                        </div>
                    </div>

                </div>



            </div>


        </div>

        <div class="weui-tabbar" id="tab_home">
            <a href="<?php echo getWapUrl('order','sales_order'); ?>" class="weui-tabbar__item weui-bar__item_on">

                <div class="weui-tabbar__icon"><i class="fa fa-home "></i></div>

                <i class="weui_icon_msg weui_icon_success"></i>
                <p class="weui-tabbar__label">销售</p>

            </a>
            <a href="<?php echo getWapUrl('order','purchase_order'); ?>" class="weui-tabbar__item ">

                <div class="weui-tabbar__icon"><i class="fa fa-home "></i></div>
                <i class="weui_icon_msg weui_icon_success"></i>
                <p class="weui-tabbar__label">采购</p>
            </a>

            <a href="<?php echo getWapUrl('account','index'); ?>" class="weui-tabbar__item">
                <div class="weui-tabbar__icon"><i class="fa fa-home "></i></div>
                <i class="weui_icon_msg weui_icon_success"></i>
                <p class="weui-tabbar__label">我</p>
            </a>
        </div>
    </div>
</div>

<script>

</script>