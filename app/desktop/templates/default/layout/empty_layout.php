<html>
<head>
    <title><?php echo $output['html_title']?: "八字精批"; ?></title>
    <link rel="stylesheet" href="<?php echo PROJECT_RESOURCE_SITE_URL.'/css/checkbox_radio_bootstrap.css?v='.time(); ?>">
    <link href="<?php echo GLOBAL_RESOURCE_SITE_URL; ?>/jqeasyui1.4/themes/metro/easyui.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo GLOBAL_RESOURCE_SITE_URL; ?>/bootstrap-3.3.4/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo GLOBAL_RESOURCE_SITE_URL; ?>/font/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>

    <script src="<?php echo GLOBAL_RESOURCE_SITE_URL; ?>/js/jquery.1.11.2.min.js"></script>

    <script src="<?php echo GLOBAL_RESOURCE_SITE_URL; ?>/jqeasyui1.4/jquery.easyui.min.js?v=<?php echo 2; ?>"></script>
    <script src="<?php echo GLOBAL_RESOURCE_SITE_URL; ?>/bootstrap-3.3.4/js/bootstrap.min.js"></script>


    <script src="<?php echo GLOBAL_RESOURCE_SITE_URL; ?>/layer/layer.js"></script>

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
    </style>



</head>
<body>

<?php //require_once($tpl_file); ?>
<?php //require_once(template("widget/yo.dialog")); ?>

<script>
    layer.msg('test');
</script>
</body>
</html>
