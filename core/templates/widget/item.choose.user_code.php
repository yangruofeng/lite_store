<?php
//获取gl-code-list
$m_user=new um_userModel();

$user_code_list=userClass::getUserList(array())['data'];

$branch_list=(new site_branchModel())->getAll();
?>
<script type="text/html" id="tpl_choose_user_code">
    <div style="height: 300px;width: 600px;overflow: auto">
        <table class="table table-bordered table-hover">
            <tr>
                <td colspan="10">
                    <div class="form-inline">
                        <div class="form-group">
                            <input id="txt_filter_user_code" type="text" class="form-control" placeholder="Search User-Code" onchange="filterUserCodeChange()">
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="choose_user_branch" onchange="filterUserCodeChange()">
                                <option value="0">All Branch</option>
                                <?php foreach($branch_list as $branch_item){?>
                                    <option value="<?php echo $branch_item['uid']?>"><?php echo $branch_item['branch_code']?></option>
                                <?php }?>
                            </select>
                        </div>
                        <div class="form-group">
                            <?php $position_list=(new userPositionEnum())->Dictionary();?>
                            <select class="form-control" id="choose_user_position"  onchange="filterUserCodeChange()">
                                <option value="0">All Position</option>
                                <?php foreach($position_list as $pk=>$pv){?>
                                    <option value="<?php echo $pk?>"><?php echo $pv?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>

                </td>
            </tr>
            <tr class="table-header">
                <td>Choose</td>
                <td>UserCode</td>
                <td>UserName</td>
                <td>Branch</td>
                <td>Position</td>
            </tr>
            <?php foreach($user_code_list as $item){?>
                <tr class="tr-user-code" data-user_id="<?php echo $item['uid']?>" data-user_code="<?php echo $item['user_code']?>"  data-user_name="<?php echo $item['user_name']?>"
                    data-branch_id="<?php echo $item['branch_id']?>" data-user_position="<?php echo $item['user_position']?>">
                    <td>
                        <input type="hidden" class="choose-user-id" value="<?php echo $item['uid']?>">
                        <input type="hidden" class="choose-user-code" value="<?php echo $item['user_code']?>">
                        <input type="hidden" class="choose-user-name" value="<?php echo $item['user_name']?>">
                        <button class="btn btn-primary" onclick="btn_confirm_choose_user_code_onclick(this)">Choose</button>
                    </td>
                    <td><?php echo $item['user_code']?></td>
                    <td><?php echo $item['user_name']?></td>
                    <td><?php echo $item['branch_name']?></td>
                    <td><?php echo $position_list[$item['user_position']]?></td>

                </tr>
            <?php }?>
        </table>
    </div>
</script>

<script>
    var _tpl_choose_user_branch_id;
    var _tpl_choose_user_callback;

    function showChooseUserCodeDialog(_callback,_branch_id){
        _tpl_choose_user_branch_id=_branch_id;
        _tpl_choose_user_callback=_callback;
        yo.dialog.show({
            title:"Choose Staff",
            content:$("#tpl_choose_user_code").html(),
            buttons:[{text:"Close",handler:function(){
                yo.dialog.close();
            }}]
        });
        $("#txt_filter_user_code").focus();
        //分行
        if(!_branch_id) return;
        $("#choose_user_branch").hide();
        $(".tr-user-code").each(function(){
            var _bid=$(this).data("branch_id");
            if(_branch_id!=_bid){
                $(this).hide();
            }
        });
    }
    function btn_confirm_choose_user_code_onclick(_e){
        var _user_id=$(_e).closest("td").find(".choose-user-id").val();
        var _user_name=$(_e).closest("td").find(".choose-user-name").val();
        var _user_code=$(_e).closest("td").find(".choose-user-code").val();

        yo.dialog.close();
        if(_tpl_choose_user_callback){
            _tpl_choose_user_callback(_user_id,_user_code,_user_name);
        }
    }
    function filterUserCodeChange(){
        var _txt=$("#txt_filter_user_code").val();

        $(".tr-user-code").each(function(){
            var _user_id=$(this).data("user_id");
            var _user_code=$(this).data("user_code");
            var _user_name=$(this).data("user_name");
            var _branch_id=$(this).data("branch_id");
            var _user_position=$(this).data("user_position");
            if(_tpl_choose_user_branch_id){
                if(_tpl_choose_user_branch_id!=_branch_id){
                    $(this).hide();return;
                }
            }
            var _filter_bid=$("#choose_user_branch").val();
            if(_filter_bid>0){
                if(_filter_bid!=_branch_id){
                    $(this).hide();return;
                }
            }

            var _filter_pid=$("#choose_user_position").val();
            if(_filter_pid!='0'){
                if(_filter_pid!=_user_position){
                    $(this).hide();return;
                }
            }

            if(!_txt){
                $(this).show();
            }else{
                if(_user_code.indexOf(_txt)==0){
                    $(this).show();
                }else{
                    $(this).hide();
                }
            }
        });

    }


</script>