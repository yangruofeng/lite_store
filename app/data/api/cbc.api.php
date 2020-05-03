<?php
/**
 * Created by PhpStorm.
 * User: sahara
 * Date: 2018/12/5
 * Time: 10:49
 */
class cbcApi
{

    protected $curl;
    protected $uri;
    protected $api_config;

    public function __construct()
    {
        $api_config = getConf('cbc_enquiry_api');
        if( empty($api_config) ){
            throw new Exception('CBC api config error.');
        }
        $this->api_config = $api_config;
        $this->uri = $api_config['API_URL'];
    }


    protected function apiCall($xmlData)
    {
        $this->curl=curl_init();
        curl_setopt($this->curl,CURLOPT_URL,$this->uri);
        $arr_header=array();
        $arr_header[]="Authorization: Basic ".base64_encode("srtuatxml:srtuat456");
        $arr_header[] = 'Content-Type: application/xml';  // 需要指定是xml的格式传送
        curl_setopt($this->curl, CURLOPT_HTTPHEADER, $arr_header);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($this->curl, CURLINFO_HEADER_OUT, 1);
        if( stripos($this->curl,"https://")!==FALSE ){
            curl_setopt($this->curl, CURLOPT_SSL_VERIFYPEER, 0); //对认证证书来源的检查
            curl_setopt($this->curl, CURLOPT_SSL_VERIFYHOST, 0); //从证书中检查SSL加密算法是否存在
            //curl_setopt	($this->curl, CURLOPT_USERAGENT,"curl/7.50.3");  // 有时需要加上这个才不会产生错误：SSL read: error:00000000:lib(0):func(0):reason(0), errno 10054
        }
        curl_setopt($this->curl, CURLOPT_POST, 1);
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, $xmlData);//post提交的数据包
        $result = curl_exec($this->curl);   // 抓取URL并把它传递给浏览器
        // 是否报错
        $err = '';
        if(curl_errno($this->curl))
        {
            $err=curl_error($this->curl);
        }
        curl_close($this->curl);    // //关闭cURL资源，并且释放系统资源

        if($err){
            return new result(false,"Un-expect error",$err,errorCodesEnum::UNEXPECTED_DATA);
        }else{
            return new result(true,"success",$result);
        }


    }

    public function execute($xml)
    {
        // 先检查解析XML是否有错
        $parse_data = XMLParse($xml);
        if( $parse_data === false ){
           return new result(false,'XML parse error.',$xml);
        }
        return $this->apiCall($xml);
    }
}