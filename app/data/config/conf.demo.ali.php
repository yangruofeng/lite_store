<?php
/**
 * Created by PhpStorm.
 * User: sahara
 * Date: 2017/11/1
 * Time: 9:56
 */

$config['db_conf']=array(
    "db_loan"=>array(
        "db_type"=>"mysql",
        "db_host"=>"127.0.0.1",
        "db_user"=>"demo",
        "db_pwd"=>"demo-2018",
        "db_name"=>"cesuan",  // micbank bank_test bank_live bank_demo
        "db_port"=>3306
    )
);

$config['session'] = array(
    'save_handler' => 'files',
    'save_path' => BASE_DATA_PATH.'/session'
);

$config['debug']=true;
$config['site_name'] = 'Microbank';

$config['site_root'] = 'http://iruofeng.cn/bazicesuan';
$config['global_resource_site_url'] = "http://iruofeng.cn/bazicesuan/resource";
$config['project_site_url'] = 'http://iruofeng.cn/bazicesuan/app';
$config['project_resource_url'] = 'http://iruofeng.cn/bazicesuan/app/resource';

$config['entry_api_url'] = "http://iruofeng.cn/bazicesuan/app/api/v1";

$config['upload_site_url'] = 'http://iruofeng.cn/bazicesuan/app/data/upload';

$config['entry_root_url'] = 'http://iruofeng.cn/bazicesuan/entry';

$config['app_download_url'] = 'http://iruofeng.cn/bazicesuan/app/data/downloads';



$config['api_google_map']='AIzaSyDCPjrMiBD6X2qMRS6EfqBzq_ZY37GGLUA';

//$config['cache']['type'] = 'file';

$config['allipay'] = array (
    //应用ID,您的APPID。
    'app_id' => "2016092600600689",

    'seller_id' => '2088102177351016',

    //商户私钥
    'merchant_private_key' => "MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQCBFecy8MmzGYsnrSXr/t7yXjsf9bLorqZOTDDJT1DJSZmC7JdP1fqA6OuyR3uYMsDl4VgC3EMTAaxWnW9KoMPV3as0kKqkGstnmqxIcLzy3GIZEoWLQiANLm3zt4NlWhGJsxiHhESVZxpgFbWlwfXijm8e/SYzHb9zY849m0MvaptMMFCT7rlTs21OlKa4XnadFw+1maPk23UMidfkAShR9uigRb1UmDbDwYSWCNZAMtnhdr2FuJklEPRhYmAEjU7lBTRS+rkYklXI90FJSCc+jQqqE3cE5KAN+ijq1WqTXW5YHIVX2VR2pZL/4ugXKV85FXqLjBOgUF+qE4wc8CpVAgMBAAECggEAW3CAjf0zY8M8Z6anrjylAVru1vzc9yaAeAZQqMmemHeiXrPpm4wgHyDflTI9wtpw+mZeSehtOxF8Wv66z0qCbwTPOjUgK48vdvyB/e6eagrjEo+kObllqvCwwmvEkA71TW2oepafXpXigR3fxsNWwl3TKUh5vsvbyolwlwNc3EC/guFsNskD9RUoniJVdwAJ9V9CCg6hrvj5Mmsx/i3UiM5jsLmo0krv5OYqhT+SIcfx9Oc6PEMV74jCAQ+43EUpQXRHDOrQQqzFsFw4JWH3HWEICn+hIuN7+DlodLZ9P9p5FYpvGc94bhtaYbNXmTPyOZeulqvym7QvuxN4eFXlAQKBgQD/tTQtmrLjl6U50zorf2HPEAscT4K/3tUI/5ILpb3hdo/qyN8qm4QHAnIX/0OZTh99AwTCdyadxIl5vlC3n0LTAux21+9hg1FYVLD9i2DJUuKabTvCU/ZNlXuTjE0nPB+sojS+cwA9S+FpcUlYdFOdnci3LGU9jrZBjV4VU8zWqQKBgQCBO6lWaR/7rx+jpf8ZXjCSnE3GFdcfri1f8cTSDw+DyZuYmiOvpAPlYMDCVHQzt9UNNuO21fDzHPO6o1L7T2BsOt6ukCpISfc6QrkBVvi5MsdNzvQj2Or5x2MB/bSWgcUNdMWmfXM3Ymst8NAJPIMyr+9qIsnKVgf9S2i6b/I9zQKBgQDvPhWcmYHH6Qkgyh1Bt0PG3MbYbRfy9sSxT5TQKvk2KpzKWbha//gOKt6ezyjrFanmZ92bKKnLsKfDbSnOM0btcG3XX39L5/ZCw7J49l/O3SrAu3TPA4mN208spHdHPzyPY5AfpC9UKluzMNgj12qoLIkvwGzUpGKngGHHaIldSQKBgHQGc48QDNXzMW3Ef9ZvuR431J+uRhi8USKdtn59ZQmF/PsyEC4GDDVo+0a9eiJgvpgBmsoxJAWxDaWYMs1MQ56H8Bs7daq3NY6KDv2D7wSe8U8LKifw/W3JtDs6Y2LpGVhuaXGDmei0pNN3K9/PA1+Dk2hv2UmemcewZ1NTZGJVAoGBAP1BRV32wgdXM9lUIpwgnWj4F+6Zzvf/2qcWNDrMAI5KzAgu+Igvrje5ZFdyNmDbVDjurcmIhYfusNub2Ul+ffZ4BWnpRNoJQ8WDQPo8Ks4Rfs2g1HJEUSMtIB+58S+9xqlWkdKzhjrpFcJmkKBJ21NIbLMU3/EWcx1Ikf74HZgN",


    //异步通知地址
    'notify_url' => "http://iruofeng.cn/bazicesuan/app/desktop/alipay/notify_url.php",

    //同步跳转
    'return_url' => "http://iruofeng.cn/bazicesuan/app/desktop/alipay/return_url.php",



    //编码格式
    'charset' => "UTF-8",

    //签名方式
    'sign_type'=>"RSA2",

    //支付宝网关
    'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

    //支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
    'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAoHUAcWqtLFVLHXiQ3Mys2/EjJ0blRghYsEgixTH3wuBwAa0HDh4M49yV+mhMoAaVhsa4s1K4AcIBQoXQHATdQBoSksXhylYENqRzZz09PP8rXv2caFts9CI50dZ+htmDzcGufkzIvTMUzxIYwBHMxMrpGGUz9vWQ2fCGQ5b7mfS6L02gvpz0Wc2+Nh13kYicWu8jrQTmVQPXWT37YvCX0cq9loqrqZqTm0GwAT1+VedCrssAJf8c4a/Mo+7k46YafjBjLRifhPdMGpKyZaZ+fWhmyJoQNjRxpsjzZifT2QSsgTG+ZML8sFEHs+wLmOXxI3lfmU0t/BUOREIDKJn15QIDAQAB",
);




