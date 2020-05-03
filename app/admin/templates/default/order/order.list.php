
<?php $product_lang = enum_langClass::getProductTypeLang(); ?>
<div>
    <?php if( !empty($data['data'])){ ?>
        <table class="table table-hover table-bordered">
            <thead>
            <tr class="table-header table-heading">
                <td>序号</td>
                <td>订单号</td>
                <td>测算产品</td>
                <td>姓名</td>
                <td>性别</td>
                <td>电话</td>
                <td>出生日期</td>
                <td>测算时间</td>
                <td>金额</td>
                <td>支付方式</td>
                <td>支付时间</td>
                <td>操作</td>
            </tr>
            </thead>
            <tbody class="table-body">
            <?php $idx = 1; foreach($data['data'] as $row){ ?>
                <tr>
                    <td><?php echo $idx; ?></td>
                    <td>
                        <?php echo $row['order_no'] ?><br/>
                    </td>
                    <td>
                        <?php echo $product_lang[$row['product_type']]; ?>
                    </td>
                    <td>
                        <?php echo $row['client_name'] ?><br/>
                    </td>
                    <td>
                        <?php echo $row['gender']==genderEnum::FEMALE?'女':'男'; ?><br/>
                    </td>
                    <td>
                        <?php echo $row['phone_number'] ?><br/>
                    </td>
                    <td>
                        <?php echo $row['birthday_desc'] ?><br/>
                    </td>
                    <td>
                        <?php echo $row['create_time'] ?><br/>
                    </td>
                    <td>
                        <?php echo $row['order_amount'] ?><br/>
                    </td>
                    <td>
                        <?php echo $row['paid_way'] ?><br/>
                    </td>
                    <td>
                        <?php echo $row['paid_time'] ?><br/>
                    </td>
                    <td>
                        <?php if( !$row['is_paid'] ){ ?>
                            <a href="<?php echo getBackOfficeUrl('admin_order','confirmReceipt',array(
                                'order_id' => $row['uid']
                            )); ?>" class="btn btn-danger">确认收钱</a>
                        <?php } ?>
                    </td>

                </tr>
            <?php $idx++; }?>
            </tbody>
        </table>

        <?php include_once(template("widget/inc_content_pager"));?>
    <?php } ?>

</div>


