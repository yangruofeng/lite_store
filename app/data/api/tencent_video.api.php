<?php

/**
 * Created by PhpStorm.
 * User: sahara
 * Date: 2019/1/15
 * Time: 14:16
 */
class tencent_videoApi
{
    protected $secretId;
    protected $secretKey;

    public function __construct()
    {
        $conf = C("tencent_video_api");
        if (!$conf) {
            throw new Exception('No tencent video api config.', 0);
        }

        $this->secretId = $conf['SecretId'];
        $this->secretKey = $conf['SecretKey'];
    }

    public function getClientUploadSign()
    {
        $secret_id = $this->secretId;
        $secret_key = $this->secretKey;

        // 确定签名的当前时间和失效时间
        $current = time();
        $expired = $current + 86400;  // 签名有效期：1天

        // 向参数列表填入参数
        $arg_list = array(
            "secretId" => $secret_id,
            "currentTimeStamp" => $current,
            "expireTime" => $expired,
            "random" => rand()
        );

        // 计算签名
        $orignal = http_build_query($arg_list);
        $signTemp = hash_hmac('SHA1', $orignal, $secret_key, true);  // 20 字节的二进制串
        $signature = base64_encode($signTemp . $orignal);
        return array(
            'sign' => $signature,
            'expire_time' => $expired
        );
    }

    /**
     * 删除视频
     * @param $file_id
     * @return result
     */
    public function deleteVideo($file_id)
    {
        $api_url = 'vod.tencentcloudapi.com/?';
        $params = array(
            'Action' => 'DeleteMedia',
            'Version' => '2018-07-17',
            'FileId' => $file_id,
        );

        $api_url = 'https://' . $this->createApiUrl($api_url, $params);
        $rt = curl_get($api_url);
        $rt_arr = my_json_decode($rt);

        if ($rt_arr['Response']['Error']) {
            return new result(false, $rt_arr['Response']['Message'], null, errorCodesEnum::API_FAILED);
        } else {
            return new result(true, '', $rt_arr['Response']['RequestId']);
        }
    }

    /**
     * 生成请求api
     * @param $api_url
     * @param $params
     * @param string $sign_method
     * @return string
     */
    private function createApiUrl($api_url, $params, $sign_method = "GET")
    {
        $params['Timestamp'] = time();
        $params['Nonce'] = mt_rand(10000, 99999);
        $params['SecretId'] = $this->secretId;
        $secretKey = $this->secretKey;
        $params_new = array();
        ksort($params);
        foreach ($params as $key => $val) {
            $params_new[] = $key . '=' . $val;
        }
        $params_str = implode("&", $params_new);
        $srcStr = $sign_method . $api_url . $params_str;
        $signStr = base64_encode(hash_hmac('sha1', $srcStr, $secretKey, true)); //签名
        $params['Signature'] = $signStr;
        $api_url .= http_build_query($params);
        return $api_url;
    }


}