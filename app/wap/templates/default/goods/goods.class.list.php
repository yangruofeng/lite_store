

<div>
    <?php include template('widget/inc_header_weui'); ?>
</div>

<div>
    <div class="button-sp-area cell" style="margin: 20px 0;">
        <a href="<?php echo getWapUrl('goods','addClass'); ?>" class="weui-btn weui-btn_primary">
            <i class="fa fa-plus"></i>添加分类</a>
    </div>
</div>

<div class="weui-cells__title">分类列表</div>
<div class="weui-cells">
    <?php foreach( $output['class_list'] as $item ){ ?>
        <a class="weui-cell  weui-cell_access" href="javascript:">
            <div class="weui-cell__bd">
                <p><?php echo $item['class_name']; ?></p>
            </div>
            <div class="weui-cell__ft">
            </div>
        </a>
    <?php } ?>


</div>