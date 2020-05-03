
<?php $order_info = $output['order_info']; ?>
<div class="page">
    <div class="fixed-bar">
        <div class="item-title">
            <h3>确认收款</h3>
            <ul class="tab-base">

            </ul>
        </div>
    </div>
    <div class="container" style="width: 99%">
        <div class="business-condition">

        </div>

        <div class="business-content">

            <div class="business-list">

                <form action="" method="post" class="form-horizontal" style="max-width: 500px;">

                    <input type="hidden" name="act" value="admin_order">
                    <input type="hidden" name="op" value="confirmReceipt">
                    <input type="hidden" name="form_submit" value="ok">
                    <input type="hidden" name="order_id" value="<?php echo $order_info['uid']; ?>">
                    <table class="table table-hover">
                        <tr>
                            <td>支付方式</td>
                            <td>
                                <select class="form-control" name="paid_way" id="">
                                    <?php foreach( (new paidWayEnum())->toArray() as $v ){ ?>
                                        <option value="<?php echo $v; ?>"><?php echo $v; ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center" colspan="10">
                                <input type="submit" class="btn btn-primary" value="确认">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
<script>

</script>
