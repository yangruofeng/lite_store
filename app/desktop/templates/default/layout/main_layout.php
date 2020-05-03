<html>
<head>
    <title><?php echo  "八字精批"; ?></title>
    <meta name="keywords"  content="算命,八字,测算,八字算命" />
    <meta name="description" content="八字算命,婚姻,事业,爱情,命运,财富" />
    <link rel="shortcut icon" href="<?php echo SITE_ROOT_URL; ?>/favicon.ico" />
    <link rel="stylesheet" href="<?php echo PROJECT_RESOURCE_SITE_URL.'/css/checkbox_radio_bootstrap.css?v='.time(); ?>">
    <link href="<?php echo GLOBAL_RESOURCE_SITE_URL; ?>/jqeasyui1.4/themes/metro/easyui.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo GLOBAL_RESOURCE_SITE_URL; ?>/bootstrap-3.3.4/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo GLOBAL_RESOURCE_SITE_URL; ?>/font/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>

    <script src="<?php echo GLOBAL_RESOURCE_SITE_URL; ?>/js/jquery.1.11.2.min.js"></script>

    <script src="<?php echo GLOBAL_RESOURCE_SITE_URL; ?>/jqeasyui1.4/jquery.easyui.min.js?v=<?php echo 2; ?>"></script>
    <script src="<?php echo GLOBAL_RESOURCE_SITE_URL; ?>/bootstrap-3.3.4/js/bootstrap.min.js"></script>

    <script src="<?php echo GLOBAL_RESOURCE_SITE_URL.'/layer/layer.js?v='.time(); ?>"></script>

    <script src="<?php echo GLOBAL_RESOURCE_SITE_URL; ?>/js/jq.extend.js"></script>
    <script src="<?php echo GLOBAL_RESOURCE_SITE_URL; ?>/js/jq.json.js"></script>
    <?php require_once template('widget/app.common.js'); ?>
    <script src="<?php echo GLOBAL_RESOURCE_SITE_URL; ?>/js/yo.js?v=<?php echo 3;?>"></script>
    <script src="<?php echo GLOBAL_RESOURCE_SITE_URL; ?>/js/yo.extend.js"></script>
    <script src="<?php echo GLOBAL_RESOURCE_SITE_URL; ?>/js/easyui.extend.js"></script>
    <script src="<?php echo GLOBAL_RESOURCE_SITE_URL; ?>/js/common.js"></script>
    <link rel="stylesheet" href="<?php echo GLOBAL_RESOURCE_SITE_URL.'/rui-datepicker-master/src/rui-datepicker.css'; ?>">
    <script src="<?php echo GLOBAL_RESOURCE_SITE_URL.'/rui-datepicker-master/src/rui-datepicker.js'; ?>"></script>
    <link rel="stylesheet" href="<?php echo PROJECT_RESOURCE_SITE_URL.'/css/main.css?v='.time(); ?>">

    <style>
        body{
            background-color: #faf1d3;
        }

        #cs_frm{
            padding: 20px 10px;
            background-image: url(<?php echo PROJECT_RESOURCE_SITE_URL.'/images/index/item_bg.png'; ?>);
            background-repeat: no-repeat;
            -webkit-background-size:100%;
            background-size:100%;
            -o-background-size: 100%;
        }

        .frm-input{
            padding: 20px 10px;
            background-color: #ffe7c7;
            width: 96%;
            margin: 0 auto;
        }

        .frm-input table td{
            border-top: none !important;
            vertical-align: middle !important;
        }
        #cs_button{
            display: block;
            width: 96%;
            margin: 0 auto;
            padding: 10px 0;
            text-align: center;
            font-size: 3em;
            background-color: #d63129;
            color:#fff;
            border-radius: 10px;
            text-decoration: none;
            margin-top: 30px;
        }

        .input-label{
            font-size: 1.3em;
        }

        .input-place{
            height: 40px;
        }

        .input-place::-webkit-input-placeholder{
            color: #000;
        }

        .input-place::-ms-input-placeholder{
            color: #000;
        }

        .input-place::-o-input-placeholder{
            color: #000;
        }

        .input-place::-moz-input-placeholder{
            color: #000;
        }

        .cs-parent{
            position: relative;
            background-image: url(<?php echo PROJECT_RESOURCE_SITE_URL.'/images/index/i62.png'; ?>);
            background-repeat: no-repeat;
            -webkit-background-size:100%;
            background-size:100%;
            -o-background-size: 100%;
            padding-top: 35%;
        }

        .cs-content{
           /* position:absolute;
            left:0;
            top: 22%;*/
        }

        .cs-item{
            display: inline-block;
            width: 49%;
        }
        .cs-item-right{
            margin-left: 1%;
        }

        .radio-group{
            display: inline-block;
        }
    </style>

</head>
<body>
<?php require_once(template("widget/yo.dialog")); ?>
<script>

</script>
<div style="max-width: 750px;margin: 0 auto;background-color: #fff;">
    <?php require_once($tpl_file); ?>
</div>

<script>

</script>


</body>
</html>
