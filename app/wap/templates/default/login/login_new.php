
<div class="page form js_show" style="height: 100%;">
    <form id="frm_login">
        <div class="weui-form">
            <div class="weui-form__text-area">

            </div>
            <div class="weui-form__control-area" style="text-align: center;">
                <div class="weui-cells__group weui-cells__group_form" >
                    <div class="weui-cells__title" style="margin-top: 20%;">
                        <h3>登录</h3>

                    </div>
                    <div class="weui-cells weui-cells_form">
                        <div class="weui-cell weui-cell_active">
                            <div class="weui-cell__hd"><label class="weui-label">账号</label></div>
                            <div class="weui-cell__bd">
                                <input type="text" name="account"  class="weui-input" placeholder="登录账号">
                            </div>
                        </div>
                        <div class="weui-cell weui-cell_active">
                            <div class="weui-cell__hd"><label class="weui-label">密码</label></div>
                            <div class="weui-cell__bd">
                                <input type="password"  name="password" class="weui-input" placeholder="">
                            </div>
                        </div>
                        <div class="weui-cell weui-cell_active">
                            <div class="weui-cell__hd"><label class="weui-label">7天免登录</label></div>
                            <div class="weui-cell__bd">
                                <input class="weui-switch" name="is_remember" type="checkbox">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="weui-form__tips-area">

            </div>
            <div class="weui-form__opr-area">
                <a class="weui-btn weui-btn_primary " onclick="login();" href="javascript:" id="showTooltips">确定</a>
            </div>


        </div>
    </form>


</div>

<script>
    function login(){
        var _param = $('#frm_login').getValues();
        showMask();
        yo.loadData({
            _c:'login',
            _m:'login',
            param:_param,
            callback:function(_o){
                hideMask();
                if(!_o.STS){
                    alert(_o.MSG);
                }else{
                    alert('登录成功',2,function(){
                        window.location.href='<?php echo getWapUrl('order','sales_order'); ?>';
                    });
                }

            }
        });
    }
</script>