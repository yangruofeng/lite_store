

<div>
    <?php include template('widget/inc_header_weui'); ?>
</div>

<div>
    <div class="button-sp-area cell" style="margin: 20px 0;">
        <a href="<?php echo getWapUrl('goods','addGoods'); ?>" class="weui-btn weui-btn_primary">
            <i class="fa fa-plus"></i>添加商品</a>
    </div>
</div>

<div class="weui-cells__title">商品列表</div>
<div class="weui-cells">
    <?php foreach( $output['goods_list'] as $item ){ ?>
        <a class="weui-cell  weui-cell_access" href="javascript:">
            <div class="weui-cell__bd">
                <p><?php echo $item['goods_name']; ?></p>
            </div>
            <div class="weui-cell__ft">
                库存：<?php echo $item['stock_cnt']; ?>
            </div>
        </a>
    <?php } ?>




</div>