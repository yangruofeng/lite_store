<div>
    <?php include template('widget/inc_header_weui'); ?>
</div>

<div >
    <form id="frm_login">
        <div class="weui-form">

            <div class="weui-form__control-area" style="text-align: center;">
                <div class="weui-cells__group weui-cells__group_form" >


                    <div class="weui-cells weui-cells_form">

                        <div class="weui-cell weui-cell_active weui-cell_select weui-cell_select-after">
                            <div class="weui-cell__hd">
                                <label for="" class="weui-label">分类</label>
                            </div>
                            <div class="weui-cell__bd">
                                <select class="weui-select" name="class_id">
                                    <?php foreach( $output['class_list'] as $v ){ ?>
                                        <option value="<?php echo $v['uid']; ?>"><?php echo $v['class_name']; ?></option>
                                    <?php } ?>

                                </select>
                            </div>
                        </div>

                        <div class="weui-cell weui-cell_active">
                            <div class="weui-cell__hd"><label class="weui-label">商品名称</label></div>
                            <div class="weui-cell__bd">
                                <input type="text" name="goods_name"  class="weui-input" placeholder="">
                            </div>
                        </div>

                        <div class="weui-cell weui-cell_active">
                            <div class="weui-cell__hd"><label class="weui-label">库存</label></div>
                            <div class="weui-cell__bd">
                                <input type="number" name="stock_cnt"  class="weui-input" placeholder="">
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="weui-form__tips-area">

            </div>
            <div class="weui-form__opr-area">
                <a class="weui-btn weui-btn_primary " onclick="addClass();" href="javascript:" id="showTooltips">确定</a>
            </div>


        </div>
    </form>


</div>

<script>
    function addClass(){
        var _param = $('#frm_login').getValues();
        showMask();
        yo.loadData({
            _c:'goods',
            _m:'addGoodsSubmit',
            param:_param,
            callback:function(_o){
                hideMask();
                if(!_o.STS){
                    alert(_o.MSG);
                }else{
                    alert('添加成功',2,function(){
                        window.location.href='<?php echo getWapUrl('goods','goodsList'); ?>';
                    });
                }

            }
        });
    }
</script>
