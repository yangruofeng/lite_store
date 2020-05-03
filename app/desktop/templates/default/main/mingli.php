<style>
    body{
        background-color: #faf1d3;
    }



    .page-bottom{
        margin: 20px 0;
        padding: 10px 0;
    }
</style>
<div class="text-center">
    <div >
        <div>
            <header class="header1" style="background-color: #ec9696;">

                <table class="table" style="margin-bottom: 0;">
                    <tr>
                        <td width="30%" class="text-left">
                            <a onclick="window.history.go('-1');"><i class="fa fa-chevron-left" style="font-size: 1.5em;cursor: pointer;" aria-hidden="true"></i></a>
                        </td>
                        <td width="40%" class="text-center">
                            <label for="" style="font-size: 1.5em;">命理</label>
                        </td>
                        <td width="30%" class="text-right">
                            <a href="<?php echo getDesktopUrl('order','orderList'); ?>" style="font-size: 1.2em;">我的订单</a>
                        </td>
                    </tr>
                </table>
            </header>
        </div>


        <div>
            <img class="img-responsive" src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/mingli/2.png'; ?>" alt="">
        </div>

        <div>
            <img class="img-responsive" src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/mingli/3.png'; ?>" alt="">
        </div>

        <div>
            <img class="img-responsive" src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/mingli/4.png'; ?>" alt="">
        </div>

        <div>
            <img class="img-responsive" src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/mingli/5.png'; ?>" alt="">
        </div>
        <div>
            <img class="img-responsive" src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/mingli/6.png'; ?>" alt="">
        </div>


        <div id="cs_frm">
            <?php $product_type = productTypeEnum::ML; ?>
            <?php include template('widget/cesuan.form');?>

            <div>
                <a data-submit="1" style="cursor: pointer;" id="cs_button" onclick="submitOrder();">
                    立即测算
                </a>
            </div>

        </div>





    </div>


</div>



<script>




</script>