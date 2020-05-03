<form action="" id="submit_form" class="form-horizontal">
    <input type="hidden" id="product_type" name="product_type" value="<?php echo $product_type?:productTypeEnum::JP; ?>">
    <div class="clearfix frm-input" >

        <table class="table" style="color: #420e2e;">
            <tr>
                <td width="40%" class="text-center">
                    <label class="input-label" for="">您的姓名：</label>
                </td>
                <td width="60%">
                    <input style="font-size: 1.5em;font-weight: 600;"
                           class="form-control input-place" id="name" type="text" name="name" value="" placeholder="请输入姓名">

                </td>
            </tr>
            <tr>
                <td width="40%" class="text-center">
                    <label class="input-label" for="">您的性别：</label>
                </td>
                <td width="60%">

                    <div class="radio radio-group">
                        <label style="padding-left: 0;">
                            <input type="radio" name="gender" value="<?php echo genderEnum::MALE; ?>" checked>
                            <i class="fa fa-2x icon-radio"></i>
                            <span style="font-size: 1.3em;">男</span>
                        </label>
                    </div>
                    <div class="radio radio-group" style="margin-left: 20px;">
                        <label style="padding-left: 0;">
                            <input type="radio" name="gender" value="<?php echo genderEnum::FEMALE; ?>">
                            <i class="fa fa-2x icon-radio"></i>
                            <span style="font-size: 1.3em;">女</span>
                        </label>
                    </div>
                </td>
            </tr>


            <tr>
                <td width="40%" class="text-center">
                    <label class="input-label" for="">出生日期：</label>
                </td>
                <td width="60%">
                    <input style="background-color: #fff;" readonly class="form-control input-place"
                           data-confirm="false" data-toid-date="birthday_date" data-toid-hour="birthday_hour" data-hour="2"
                           id="birthday" type="text" name="birthday" value="" placeholder="请选择出生日期">
                    <input type="hidden" id="birthday_date" name="birthday_date">
                    <input type="hidden" id="birthday_hour" name="birthday_hour">
                </td>
            </tr>

            <!--<tr>
                <td width="40%" class="text-center">
                    <label class="input-label" for="">您的电话：</label>
                </td>
                <td width="60%">
                    <input style=""
                           class="form-control input-place" id="phone_number" type="text" name="phone_number" value="" placeholder="请输入电话">

                </td>
            </tr>-->
        </table>

    </div>


</form>

<script>
    $(function(){
        var rui_date = new ruiDatepicker().init('#birthday');
    });

    function verifyFunctionHh(myUserName, b_input,phone_number) {

        var data = {};

        //姓名
        if(myUserName.value == '' || myUserName.value == undefined) {
            alert('请填写姓名',2);
            return false
        }

        //中文字符串验证
        if(!/^[\u2E80-\u9FFF]+$/.test(myUserName.value)) {
            alert('必须为中文',2);
            return false
        }

        //包含空格
        if(/\s/.test(myUserName.value)) {
            alert('姓名不能包含空格',2);
            return false
        }

        //包含下划线
        if(/(^\_)|(\__)|(\_+$)/.test(myUserName.value)) {
            alert('姓名不能包含下划线',2);
            return false
        }

        //包含数字
        if(new RegExp("^[0-9]*$").test(myUserName.value)) {
            alert('姓名不能为数字',2);
            return false
        }

        //包含英文
        if(new RegExp("^[a-zA-Z]+$").test(myUserName.value)) {
            alert('请输入中文姓名',2);
            return false
        }

        //if( phone_number.value == undefined || phone_number.value == '') {
        //alert('请输入电话',2);
        //return false
        //}

        //生辰
        if(b_input.value == '' || b_input.value == undefined) {
            alert('请选择出生日期',2);
            return false
        }


        //自定义data
        data = {
            name: myUserName.value,
            birthday: b_input.value
        };

        return data;
    }

    function submitOrder()
    {
        var values = getFormJson('#submit_form');
        var rt = verifyFunctionHh($('#name')[0],$('#birthday_date')[0],$('#phone_number')[0]);
        if( !rt ){
            return false;
        }
        console.log(values);
        yo.loadData({
            _c:'order',
            _m:'orderCreate',
            param:values,
            callback:function(rt){
                if( rt.STS ){
                    var order_no = rt.DATA.order_no;
                    window.location.href= '<?php echo getDesktopUrl('order','orderPay'); ?>'+'&order_no='+order_no;
                }else{
                    alert(rt.MSG,2);
                    return false;
                }
            }
        });
    }


</script>
