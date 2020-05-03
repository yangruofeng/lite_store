<?php
//获取gl-code-list
$gl_tree=new gl_treeModel();
$gl_code_list=$gl_tree->orderBy("gl_code")->select(array("is_leaf"=>0));

?>
<script type="text/html" id="tpl_choose_gl_tree">
    <div style="height: 300px;width: 600px;overflow: auto">
        <table class="table table-bordered table-hover">
            <tr>
                <td colspan="10">
                    <div class="form-group">
                        <input id="txt_filter_gl_code" type="text" class="form-control" placeholder="Search GL-Code By Enter-Key" onchange="filterGlCodeChange(this)">
                    </div>
                </td>
            </tr>
            <tr class="table-header">
                <td>Choose</td>
                <td>GL-Code</td>
                <td>GL-Name</td>
            </tr>
            <?php foreach($gl_code_list as $item){?>
                <tr class="tr-gl-code" data-key="<?php echo $item['gl_code']?>" data-currency="<?php echo $item['currency']?>">
                    <td>
                        <input type="hidden" class="choose-gl-code" value="<?php echo $item['gl_code']?>">
                        <input type="hidden" class="choose-gl-id" value="<?php echo $item['uid']?>">
                        <input type="hidden" class="choose-gl-name" value="<?php echo $item['gl_name']?>">
                        <button class="btn btn-primary" onclick="btn_confirm_choose_gl_code_onclick(this)">Choose</button>
                    </td>
                    <td><?php echo $item['gl_code']?></td>
                    <td><?php echo $item['gl_name']?></td>
                </tr>
            <?php }?>
        </table>
    </div>
</script>

<script>
    var _tpl_current_currency;
    var _tpl_current_callback;

    function showChooseGLCodeDialog(_callback,_currency){
        _tpl_current_currency=_currency;
        _tpl_current_callback=_callback;
        yo.dialog.show({
            title:"Choose GL-Code",
            content:$("#tpl_choose_gl_tree").html(),
            buttons:[{text:"Close",handler:function(){
                yo.dialog.close();
            }}]
        });
        $("#txt_filter_gl_code").focus();
        //隐藏货币
        if(!_currency) return;
        var _def_ccy=_currency;
        $(".tr-gl-code").each(function(){
            var _ccy=$(this).data("currency");
            if(_def_ccy!=_ccy){
                $(this).hide();
            }
        });
    }
    function btn_confirm_choose_gl_code_onclick(_e){
        var _gl_code=$(_e).closest("td").find(".choose-gl-code").val();
        var _gl_uid=$(_e).closest("td").find(".choose-gl-id").val();
        var _gl_name=$(_e).closest("td").find(".choose-gl-name").val();

        yo.dialog.close();
        if(_tpl_current_callback){
            _tpl_current_callback(_gl_uid,_gl_code,_gl_name);
        }
    }
    function filterGlCodeChange(_e){
        var _txt=$(_e).val();
        $(".tr-gl-code").each(function(){
            var _key=$(this).data("key").toString();
            var _ccy=$(this).data("currency");
            if(_tpl_current_currency){
                if(_tpl_current_currency!=_ccy){
                    $(this).hide();return;
                }
            }
            if(!_txt){
                $(this).show();
            }else{
                console.log(_key);
                console.log(_txt);
                if(_key.indexOf(_txt)==0){
                    $(this).show();
                }else{
                    $(this).hide();
                }
            }
        });
    }


</script>