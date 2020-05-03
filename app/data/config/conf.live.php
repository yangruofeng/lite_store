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
        "db_pwd"=>"demo2019",
        "db_name"=>"cesuan",
        "db_port"=>3306
    )
);

$config['session'] = array(
    'save_handler' => 'files',
    'save_path' => BASE_DATA_PATH.'/session'
);

$config['debug']=true;
$config['site_name'] = '八字精批';

$root_domain = 'http://www.fuyao88.com';
$config['site_root'] = $root_domain;
$config['global_resource_site_url'] = "$root_domain/resource";
$config['project_site_url'] = $root_domain.'/app';
$config['project_resource_url'] = $root_domain.'/app/resource';

$config['entry_api_url'] = "$root_domain/app/api/v1";

$config['upload_site_url'] = $root_domain.'/app/data/upload';

$config['entry_root_url'] = $root_domain.'/entry';

$config['app_download_url'] = $root_domain.'/app/data/downloads';



$config['api_google_map']='AIzaSyDCPjrMiBD6X2qMRS6EfqBzq_ZY37GGLUA';

//$config['cache']['type'] = 'file';

$config['allipay'] = array (
    //应用ID,您的APPID。
    'app_id' => "2019032463651426",

    'seller_id' => '2088102177351016',

    //商户私钥
    'merchant_private_key' => 'MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQCyO7g9w4GQAH+WWVMqZeWX0sHO0BEJ4xpTosDDAYnbN9TtDhBefFUj+YVeINUn3jzu6EjTeSc2ZJWIAW+pwziRjLmvv4YfGPQJVYNzoPEqoI8N83+MU+150pQDFNveZAXNLbjW2PSRjZyTMJgNMkfDMFe/YK0U8WHsKUXn670SC9eYIDqVsE28UmaE8ah+Wl6pQaWWGlzsFd7v6ebPNm+69uWV8AV9CVvQK/LJOcoAk254yVXAlWlb0FCrttLpKa0Mubf7ZTpmNdch3nnMA0v+tD7WKk5wDvnbegnCDyfTJMa9Njk6BpDmPvvAnbmnQc9EnAcyoSoljV0uMgkU5+wfAgMBAAECggEBAKDFVdAAxqIKkQwhzu7zs0JcDg5riLMOc/T1XkOI470mg57BjOpt5K7qqO7bVur7gKNQTEDVjBV4bZmdEghj3GcONYDeljD+5UJ2LHjkuCXnZqMC/g6qtg+pb3HIIvxb5Q/LKmxCj3mr74ylzMI6lJjwxnYO0pGNmvLX2AL3ljjriTC9jpZq5Oj5RUxFwyr011Hz8pPeYmAHThr77unOHLiSuU/yiOAfTigywgvbhB7ISK3sAeyZlk16R4YCXEwnbv/yTsiFe4X5a6WCDXix9lda2puJvxQvoQwCpbgRE31r1W7P0tGftcUxBy6jdk89cTmgbocPTvLKcOeUXg83HcECgYEA8q40a333i2c1nLFgPBUHUrn0JY7geaCBR9lfPioYJOhf5leDjE9/5nYnQAqdkcqzNV50ZvBuAReYt7sBj9sMQ7hHIzqp+SrjdDMTqbVmNTEPgts+ztTpeRbPW12KgoFpK85/+8K4M0y8v8yEdOv36DpgLnqh8D4Hr8iKHYteu9cCgYEAvAP++EjA5z73NRgY88ddZS6rWQUpIL4oSNpAr6cfi7u+o37hC8dauz9fk43KWQrzVNfLo+2Rj3y8ZmBfwEx5jNentndfRoRqgkFgJi74e8RNRISlBZCnsFpdGztHrLjjNT3ZnyNIuKgmom5hM76UtrLa5TXDXtNWD5GYlUaviPkCgYEAkU6/snE9bKoCzuziK3eH5//R8T8op4r0fdnpDmbUCB1fdqOF79iWQ58Rh2YTzPzq6xTAa/agV2USm0iM+d717AKGDdENf1Uv1h7TMjWcmlLi775pUBzqIwgGZrWOvu/P0lwWA+AmvQjAp7NEyGGWEeYKOypQlnH91kIkeOY/dgcCgYBUhONYj7QQADE27/c/l063zov+f6BmdLU9Usejbthyg1qGuuHF3r89z5ZSiXn+HzsV19BWh9RYkXVL/GTu2DIIC2X8U5tD4wDSPztOzuyrDqrBc3OPleCcGXMja7mjvpV8+KncrQri38xGVqJhlXnay3o1cb664PweEZBrApSkWQKBgEWSTXnD9ap4pvlyVN78K7H9IK4yKrSveM69x+2BPwyLduYPTE07LhF/8cC1zM2vNFey2uPuhqlxRv7l+CbLCrJmF82NnxGxuPhc251aKM+fxFRt2RJl3h2sbHP0aiPX8F0g/73mD+8GiXXpJGM7ZF7gSKW0m2kafYrygUq+gPC/',
    'merchant_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAsju4PcOBkAB/lllTKmXll9LBztARCeMaU6LAwwGJ2zfU7Q4QXnxVI/mFXiDVJ9487uhI03knNmSViAFvqcM4kYy5r7+GHxj0CVWDc6DxKqCPDfN/jFPtedKUAxTb3mQFzS241tj0kY2ckzCYDTJHwzBXv2CtFPFh7ClF5+u9EgvXmCA6lbBNvFJmhPGoflpeqUGllhpc7BXe7+nmzzZvuvbllfAFfQlb0CvyyTnKAJNueMlVwJVpW9BQq7bS6SmtDLm3+2U6ZjXXId55zANL/rQ+1ipOcA7523oJwg8n0yTGvTY5OgaQ5j77wJ25p0HPRJwHMqEqJY1dLjIJFOfsHwIDAQAB",

    //异步通知地址
    'notify_url' => "$root_domain/app/desktop/alipay/notify_url.php",

    //同步跳转
    'return_url' => "$root_domain/app/desktop/alipay/return_url.php",

    'auth_url' => "$root_domain/app/desktop/alipay/auth.php",



    //编码格式
    'charset' => "UTF-8",

    //签名方式
    'sign_type'=>"RSA2",

    //支付宝网关
    'gatewayUrl' => "https://openapi.alipay.com/gateway.do",

    //支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
    'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAkHeeIjeruNR67BvVZX2P4SIzld8cG4xTS29QiWwNxPDMNA8H5mlcBO9M3Libt5CWxCi0JbJl5ywt117TOM8oBu37oF2gTdnAXJ0jhnfuN7P0vh8sf1OceSfapM/QSJG5Ft1iCcOzHl1PqbRsAEteZIUuqk/B85AGCJutK6l16RJfQP6ULcrupdDfpeNncQ5ZCSIJMY/w1YrB6gnxdWmYkC6ETxcEbByPOBJZPUsGTNpvAbmQnmbzI0ckJIOIXDdmb0Eee1Av6nHF02etO6Dt4nbXXG7mxgvQwO886zv/tNxy9TonRvVkSNfnXJKhHxfw1HEWrdIKolmbXrckeBF97QIDAQAB",
);


// 新的应用
$config['allipay'] = array (
    //应用ID,您的APPID。
    'app_id' => "2019060565506007",

    'seller_id' => '2088531132636457',

    //商户私钥
    'merchant_private_key' => 'MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQCyO7g9w4GQAH+WWVMqZeWX0sHO0BEJ4xpTosDDAYnbN9TtDhBefFUj+YVeINUn3jzu6EjTeSc2ZJWIAW+pwziRjLmvv4YfGPQJVYNzoPEqoI8N83+MU+150pQDFNveZAXNLbjW2PSRjZyTMJgNMkfDMFe/YK0U8WHsKUXn670SC9eYIDqVsE28UmaE8ah+Wl6pQaWWGlzsFd7v6ebPNm+69uWV8AV9CVvQK/LJOcoAk254yVXAlWlb0FCrttLpKa0Mubf7ZTpmNdch3nnMA0v+tD7WKk5wDvnbegnCDyfTJMa9Njk6BpDmPvvAnbmnQc9EnAcyoSoljV0uMgkU5+wfAgMBAAECggEBAKDFVdAAxqIKkQwhzu7zs0JcDg5riLMOc/T1XkOI470mg57BjOpt5K7qqO7bVur7gKNQTEDVjBV4bZmdEghj3GcONYDeljD+5UJ2LHjkuCXnZqMC/g6qtg+pb3HIIvxb5Q/LKmxCj3mr74ylzMI6lJjwxnYO0pGNmvLX2AL3ljjriTC9jpZq5Oj5RUxFwyr011Hz8pPeYmAHThr77unOHLiSuU/yiOAfTigywgvbhB7ISK3sAeyZlk16R4YCXEwnbv/yTsiFe4X5a6WCDXix9lda2puJvxQvoQwCpbgRE31r1W7P0tGftcUxBy6jdk89cTmgbocPTvLKcOeUXg83HcECgYEA8q40a333i2c1nLFgPBUHUrn0JY7geaCBR9lfPioYJOhf5leDjE9/5nYnQAqdkcqzNV50ZvBuAReYt7sBj9sMQ7hHIzqp+SrjdDMTqbVmNTEPgts+ztTpeRbPW12KgoFpK85/+8K4M0y8v8yEdOv36DpgLnqh8D4Hr8iKHYteu9cCgYEAvAP++EjA5z73NRgY88ddZS6rWQUpIL4oSNpAr6cfi7u+o37hC8dauz9fk43KWQrzVNfLo+2Rj3y8ZmBfwEx5jNentndfRoRqgkFgJi74e8RNRISlBZCnsFpdGztHrLjjNT3ZnyNIuKgmom5hM76UtrLa5TXDXtNWD5GYlUaviPkCgYEAkU6/snE9bKoCzuziK3eH5//R8T8op4r0fdnpDmbUCB1fdqOF79iWQ58Rh2YTzPzq6xTAa/agV2USm0iM+d717AKGDdENf1Uv1h7TMjWcmlLi775pUBzqIwgGZrWOvu/P0lwWA+AmvQjAp7NEyGGWEeYKOypQlnH91kIkeOY/dgcCgYBUhONYj7QQADE27/c/l063zov+f6BmdLU9Usejbthyg1qGuuHF3r89z5ZSiXn+HzsV19BWh9RYkXVL/GTu2DIIC2X8U5tD4wDSPztOzuyrDqrBc3OPleCcGXMja7mjvpV8+KncrQri38xGVqJhlXnay3o1cb664PweEZBrApSkWQKBgEWSTXnD9ap4pvlyVN78K7H9IK4yKrSveM69x+2BPwyLduYPTE07LhF/8cC1zM2vNFey2uPuhqlxRv7l+CbLCrJmF82NnxGxuPhc251aKM+fxFRt2RJl3h2sbHP0aiPX8F0g/73mD+8GiXXpJGM7ZF7gSKW0m2kafYrygUq+gPC/',
    'merchant_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAsju4PcOBkAB/lllTKmXll9LBztARCeMaU6LAwwGJ2zfU7Q4QXnxVI/mFXiDVJ9487uhI03knNmSViAFvqcM4kYy5r7+GHxj0CVWDc6DxKqCPDfN/jFPtedKUAxTb3mQFzS241tj0kY2ckzCYDTJHwzBXv2CtFPFh7ClF5+u9EgvXmCA6lbBNvFJmhPGoflpeqUGllhpc7BXe7+nmzzZvuvbllfAFfQlb0CvyyTnKAJNueMlVwJVpW9BQq7bS6SmtDLm3+2U6ZjXXId55zANL/rQ+1ipOcA7523oJwg8n0yTGvTY5OgaQ5j77wJ25p0HPRJwHMqEqJY1dLjIJFOfsHwIDAQAB",

    //异步通知地址
    'notify_url' => "$root_domain/app/desktop/alipay/notify_url.php",

    //同步跳转
    'return_url' => "$root_domain/app/desktop/alipay/return_url.php",

    'auth_url' => "$root_domain/app/desktop/alipay/auth.php",



    //编码格式
    'charset' => "UTF-8",

    //签名方式
    'sign_type'=>"RSA2",

    //支付宝网关
    'gatewayUrl' => "https://openapi.alipay.com/gateway.do",

    //支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
    'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAi1NZzMTl4QbwC411eMWhzut3HmPFcRFmw9a8L+lTKGL4ziDEDwysdgRsgCR7yeUaRGRAzeZXhsJc16T4XttO1w/yjQMP1LJ5YcIYqkN3GcxT30DitOCUJb8c7PSW32vKiUVIcHr2Qs02Okm+UO8sggtF6oD/yFsOvaT8ylI13sqEEqJEEz3BNiJxUjAite/Rp58PprfkrgjsHRDJqsQLLCO03ATyUf/SP47/qdT1gNUtgu51UtTy6VHFiq/AoFGUT76ugPvDEqclvS1nnzjF6AvP7qrUtQL5XrLN/YTAPe5UQ4FcNp9YRqNBRdLBQlHdOwIdk/M8kqDopJH4z642uwIDAQAB",
);






