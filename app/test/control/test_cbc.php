<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 9/17/2018
 * Time: 9:39 AM
 */
class test_cbcControl{


    public function XML_parse($xml_data,$is_array=true)
    {
        $DATA =  simplexml_load_string($xml_data, 'SimpleXMLElement', LIBXML_NOCDATA | LIBXML_NOBLANKS );
        if( $DATA === false ){
            return $DATA;
        }
        return $is_array?obj2array((array)$DATA):$DATA;
    }

    public function testXmlTransferOp()
    {
        $enquiry_date = date('Y-m-d',strtotime(str_replace('/','-','20/12/2018')));
        echo $enquiry_date;

        //$xmlData=file_get_contents("resource/cbc_xml/success_response/S_SC.NA.EG.xml");
        //$xmlData=file_get_contents("resource/cbc_xml/response_success1.xml");
        $xmlData=file_get_contents("resource/cbc_xml/r_error.xml");
        var_dump($xmlData);
        $DATA =  $this->XML_parse($xmlData);
        // 解析错误是返回false
        var_dump($DATA);
        if( $DATA === false ){
            echo 'Parse error';
            die;
        }
        //$text="<?php \n \$data=".var_export($DATA,true).';';
        //file_put_contents('./resource/cbc_xml/success_response/S_SC.NA.EG.php',$text);
        print_r($DATA);



    }

    function testConnectOp(){
        $cbc=new cbcConnection();
        // 构造xml数据
        $xmlData=file_get_contents("resource/cbc_xml/test.xml");  // test3.xml  enquiry_request.xml
        // 已经成功过需要修改内容才能再次获得数据
        $ret=$cbc->exec($xmlData);
        var_dump($ret);
        if( $ret->STS ){
            $xml_response = $ret->DATA;
            file_put_contents('./resource/cbc_xml/response.xml',$xml_response);
            $array = $this->XML_parse($xml_response,true);
            print_r($array);
        }

    }

    function testGetHistoryReportOp()
    {
        $cbc=new cbcConnection();
        // 构造xml数据
        $xmlData=file_get_contents("resource/cbc_xml/history_report_request.xml");

        // <ENQUIRY_NUMBER>38096811</ENQUIRY_NUMBER>
        //<ENQUIRY_REFERENCE>TESTNG 0211201999</ENQUIRY_REFERENCE>
        // 说明文档有问题，用ENQUIRY_NUMBER和ENQUIRY_REFERENCE都返回参数错误问题
        $ret=$cbc->exec($xmlData);
        var_dump($ret);
        if( $ret->STS ){
            $xml_response = $ret->DATA;
            $array = $this->XML_parse($xml_response);
            print_r($array);
        }
    }


    // A_SC-NA: 可以得到基本信息+所有查询记录+其他贷款统计（summary）+ 信用评分（score）
    // A-NA : 可以得到基本信息+所有查询记录+其他贷款统计（summary）
    //  PE-NA: 没有权限

    // 不同查询的测试
    public function requestByAop()
    {
        /*
         * ACTION TYPE
         * A = Standard Consumer Enquiry
         * L = Lite Credit Report
         * PE = Public Enquiry
         * ENQUIRYV3 and ENQUIRYV4 only:
         * A_SC = Consumer Credit Report + Score
         * L_SC = Lite Credit Report + Score
         * PE_SC = Public Enquiry + Score
         * */

        // enquiry_type  NA - new application   RV - review  PE -public
        $cbc=new cbcConnection();
        // 构造xml数据
        $xmlData=file_get_contents("resource/cbc_xml/request_a.xml");
        // 已经成功过需要修改内容才能再次获得数据
        $ret=$cbc->exec($xmlData);
        var_dump($ret);
        if( $ret->STS ){
            $xml_response = $ret->DATA;
            file_put_contents('./resource/cbc_xml/response_a_na.xml',$xml_response);
            $array = $this->XML_parse($xml_response,true);
            print_r($array);
        }

    }

    public function requestByPEop()
    {
        /*
         * ACTION TYPE
         * A = Standard Consumer Enquiry
         * L = Lite Credit Report
         * PE = Public Enquiry
         * ENQUIRYV3 and ENQUIRYV4 only:
         * A_SC = Consumer Credit Report + Score
         * L_SC = Lite Credit Report + Score
         * PE_SC = Public Enquiry + Score
         * */

        // enquiry_type  NA - new application   RV - review  PE -public
        $cbc=new cbcConnection();
        // 构造xml数据
        $xmlData=file_get_contents("resource/cbc_xml/request_pe.xml");
        // 已经成功过需要修改内容才能再次获得数据
        $ret=$cbc->exec($xmlData);
        var_dump($ret);
        if( $ret->STS ){
            $xml_response = $ret->DATA;
            file_put_contents('./resource/cbc_xml/response_pe.xml',$xml_response);
            $array = $this->XML_parse($xml_response,true);
            print_r($array);
        }

    }
}
class cbcConnection{
    public $url="https://uat-pr.creditbureau.com.kh/enquiry/inthttp.pgm";//这只是test的，后面要根据config读取
    public $curl;
    public function __construct(){
        $this->initConnection();
    }


    protected function initConnection(){
        $this->curl=curl_init();
        curl_setopt($this->curl,CURLOPT_URL,$this->url);
        $arr_header=array();
//        $arr_header[]="GET /CGI-PC/JIM.MBR/MACRO HTTP/1.1";
        //$arr_header[]="Accept: */*";
        //$arr_header[]="Accept-Language: EN-US";
        //$arr_header[]="Accept-Encoding: GZIP, DEFLATE";
        //$arr_header[]="User-Agent: MOZILLA/4.0 (COMPATIBLE; MSIE 5.5; WINDOWS NT 4.0)";
        //$arr_header[]="Host: 172.16.1.2:1964";
        //$arr_header[]="Connection: KEEP-ALIVE";
        $arr_header[]="Authorization: Basic ".base64_encode("srtuatxml:srtuat456");
        $arr_header[] = 'Content-Type: application/xml';  // 需要指定是xml的格式传送
        //$arr_header[]="                      ";
        curl_setopt($this->curl, CURLOPT_HTTPHEADER, $arr_header);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($this->curl, CURLINFO_HEADER_OUT, 1);

        if( stripos($this->curl,"https://")!==FALSE ){
            curl_setopt($this->curl, CURLOPT_SSL_VERIFYPEER, 0); //对认证证书来源的检查
            curl_setopt($this->curl, CURLOPT_SSL_VERIFYHOST, 0); //从证书中检查SSL加密算法是否存在
            //curl_setopt	($this->curl, CURLOPT_USERAGENT,"curl/7.50.3");  // 有时需要加上这个才不会产生错误：SSL read: error:00000000:lib(0):func(0):reason(0), errno 10054
        }

    }
    public function exec($xmlData){

        curl_setopt($this->curl, CURLOPT_POST, 1);
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, $xmlData);//post提交的数据包
        $result = curl_exec($this->curl);   // 抓取URL并把它传递给浏览器
        echo (curl_getinfo($this->curl,CURLINFO_HEADER_OUT));
        // 是否报错
        if(curl_errno($this->curl))
        {
            $err=curl_error($this->curl);
        }
        curl_close($this->curl);    // //关闭cURL资源，并且释放系统资源
        if($err){
            return new result(false,"",$err);
        }else{
            return new result(true,"",$result);
        }
    }


}