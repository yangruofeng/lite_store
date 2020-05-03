<?php
$data = array(
    'SERVICE' => 'ENQUIRYV4',
    'ACTION' => 'A_SC',
    'STATUS' => 'OK',  // 结果状态
    'HEADER' =>
        array(
            'MEMBER_ID' => '246',
            'USER_ID' => 'SRTUATXML',
            'RUN_NO' => '5',
            'TOT_ITEMS' => '1',
            'ERR_ITEMS' =>
                array(),
        ),
    'MESSAGE' =>
        array(
            'ITEM' =>
                array(
                    'ENQUIRY_REFERENCE' => 'TESTNG 0211201999',  // 查询时的唯一参考
                    'RSP_REPORT' =>  // 查询报表
                        array(
                            'ENQUIRY_TYPE' => 'NA',
                            'REPORT_DATE' => '26/11/2018',
                            'ENQUIRY_NO' => '38096811', // 查询编号
                            'PRODUCT_TYPE' => 'AGL',
                            'NO_OF_APPLICANTS' => '1',
                            'ACCOUNT_TYPE' => 'S',
                            'ENQUIRY_REFERENCE' => 'TESTNG 0211201999',
                            'AMOUNT' => '140000.00',
                            'CURRENCY' => 'USD',
                            'CONSUMER' =>
                                array(
                                    'CAPL' => 'P',  // 客户类型
                                    'CID' =>  // 身份ID
                                        array(
                                            'CID1' => 'N',  // 类型，N 身份证
                                            'CID2' => '061473120',  // 证件号码
                                            'CID3' => '18/12/2022',  // 证件过期时间
                                        ),
                                    'PROVIDED' =>  // 查询时提供的数据
                                        array(
                                            'PCNAM' =>  // 客户名字
                                                array(
                                                    'PCNMFA' => 'សេម',  //  Family Name – Khmer
                                                    'PCNM1A' => 'ចន្ថា',  // 1 st Name – Khmer
                                                    'PCNMFE' => 'SEM',  //  Family Name – English
                                                    'PCNM1E' => 'CHANTHA',  // 1 st Name – English
                                                ),
                                            'PCDOB' => '07/08/1981',
                                            'PCPLB' =>
                                                array(
                                                    'PCPLBC' => 'KHM',
                                                    'PCPLBP' => '08',
                                                    'PCPLBD' => '0802',
                                                    'PCPLBCM' => '080204',
                                                ),
                                            'PCGND' => 'F',
                                            'PCMAR' => 'M',
                                            'PCNAT' => 'KHM',
                                            'PCEML' =>
                                                array(),
                                        ),
                                    'AVAILABLE' =>
                                        array(
                                            'ACID' =>
                                                array(
                                                    'ACID1' => 'N',
                                                    'ACID2' => '010772374',
                                                    'ACID3' => '21/03/2022',
                                                ),
                                            'ACNAM' =>
                                                array(
                                                    'ACNMFA' => 'សុង',
                                                    'ACNM1A' => 'ចាន់ណា',
                                                    'ACNMFE' => 'SONG',
                                                    'ACNM1E' => 'CHANNA',
                                                ),
                                            'ACDOB' => '07/08/1981',
                                            'ACPLB' =>
                                                array(
                                                    'ACPLBC' => 'KHM',
                                                    'ACPLBP' => '03',
                                                    'ACPLBD' => '0301',
                                                    'ACPLBCM' => '030107',
                                                ),
                                            'ACGND' => 'F',
                                            'ACMAR' => 'M',
                                            'ACNAT' => 'KHM',
                                            'ACEML' => '78A, Asd asdqwe',
                                        ),
                                    'ADDITIONAL_IDS' =>
                                        array(
                                            'ADDITIONAL_ID' =>
                                                array(
                                                    0 =>
                                                        array(
                                                            'AID_CID1' => 'N',
                                                            'AID_CID2' => '010772374',
                                                            'AID_CID3' => '21/03/2022',
                                                            'AID_LOADDT' => '13/11/2018',
                                                        ),
                                                    1 =>
                                                        array(
                                                            'AID_CID1' => 'P',
                                                            'AID_CID2' => 'N061473130',
                                                            'AID_CID3' => '20/12/2020',
                                                            'AID_LOADDT' => '06/11/2018',
                                                        ),
                                                    2 =>
                                                        array(
                                                            'AID_CID1' => 'N',
                                                            'AID_CID2' => '100565609',
                                                            'AID_CID3' => '18/12/2022',
                                                            'AID_LOADDT' => '08/03/2018',
                                                        ),
                                                    3 =>
                                                        array(
                                                            'AID_CID1' => 'N',
                                                            'AID_CID2' => '061473122',
                                                            'AID_CID3' => '18/12/2022',
                                                            'AID_LOADDT' => '18/10/2017',
                                                        ),
                                                    4 =>
                                                        array(
                                                            'AID_CID1' => 'N',
                                                            'AID_CID2' => '061473121',
                                                            'AID_CID3' => '18/12/2022',
                                                            'AID_LOADDT' => '18/07/2017',
                                                        ),
                                                ),
                                        ),
                                    'ADDITIONAL_NAMES' =>
                                        array(
                                            'ADDITIONAL_NAME' =>
                                                array(
                                                    0 =>
                                                        array(
                                                            'ANM_CNMFA' => 'សាយ',
                                                            'ANM_CNM1A' => 'សៀកឡេង',
                                                            'ANM_CNM2A' =>
                                                                array(
                                                                    '@attributes' =>
                                                                        array(
                                                                            'lang' => 'kh',
                                                                        ),
                                                                ),
                                                            'ANM_CNM3A' =>
                                                                array(
                                                                    '@attributes' =>
                                                                        array(
                                                                            'lang' => 'kh',
                                                                        ),
                                                                ),
                                                            'ANM_CNM7A' =>
                                                                array(
                                                                    '@attributes' =>
                                                                        array(
                                                                            'lang' => 'kh',
                                                                        ),
                                                                ),
                                                            'ANM_CNMFE' => 'SAY',
                                                            'ANM_CNM1E' => 'SEAKLENG',
                                                            'ANM_CNM2E' =>
                                                                array(),
                                                            'ANM_CNM3E' =>
                                                                array(),
                                                            'ANM_CNM7E' =>
                                                                array(),
                                                            'ANM_LOAD_DT' => '13/11/2018',
                                                        ),
                                                    1 =>
                                                        array(
                                                            'ANM_CNMFA' => 'សាន',
                                                            'ANM_CNM1A' => 'ប៊ុណ្ណា',
                                                            'ANM_CNM2A' => 'ប៊ុណ្ណា',
                                                            'ANM_CNM3A' =>
                                                                array(
                                                                    '@attributes' =>
                                                                        array(
                                                                            'lang' => 'kh',
                                                                        ),
                                                                ),
                                                            'ANM_CNM7A' =>
                                                                array(
                                                                    '@attributes' =>
                                                                        array(
                                                                            'lang' => 'kh',
                                                                        ),
                                                                ),
                                                            'ANM_CNMFE' => 'SAN',
                                                            'ANM_CNM1E' => 'BUNNA',
                                                            'ANM_CNM2E' =>
                                                                array(),
                                                            'ANM_CNM3E' =>
                                                                array(),
                                                            'ANM_CNM7E' =>
                                                                array(),
                                                            'ANM_LOAD_DT' => '30/03/2018',
                                                        ),
                                                    2 =>
                                                        array(
                                                            'ANM_CNMFE' => 'BIL',
                                                            'ANM_CNM1E' => 'CHET',
                                                            'ANM_CNM2E' =>
                                                                array(),
                                                            'ANM_CNM3E' =>
                                                                array(),
                                                            'ANM_CNM7E' =>
                                                                array(),
                                                            'ANM_LOAD_DT' => '08/03/2018',
                                                        ),
                                                    3 =>
                                                        array(
                                                            'ANM_CNMFA' => 'ចិត្រ',
                                                            'ANM_CNM1A' => 'ប៊ិល',
                                                            'ANM_CNM2A' =>
                                                                array(
                                                                    '@attributes' =>
                                                                        array(
                                                                            'lang' => 'kh',
                                                                        ),
                                                                ),
                                                            'ANM_CNM3A' =>
                                                                array(
                                                                    '@attributes' =>
                                                                        array(
                                                                            'lang' => 'kh',
                                                                        ),
                                                                ),
                                                            'ANM_CNM7A' =>
                                                                array(
                                                                    '@attributes' =>
                                                                        array(
                                                                            'lang' => 'kh',
                                                                        ),
                                                                ),
                                                            'ANM_CNMFE' => 'CHET',
                                                            'ANM_CNM1E' => 'BIL',
                                                            'ANM_CNM2E' =>
                                                                array(),
                                                            'ANM_CNM3E' =>
                                                                array(),
                                                            'ANM_CNM7E' =>
                                                                array(),
                                                            'ANM_LOAD_DT' => '22/02/2018',
                                                        ),
                                                    4 =>
                                                        array(
                                                            'ANM_CNMFA' => 'មាស',
                                                            'ANM_CNM1A' => 'ស្រីឆ្នាស់',
                                                            'ANM_CNM2A' =>
                                                                array(
                                                                    '@attributes' =>
                                                                        array(
                                                                            'lang' => 'kh',
                                                                        ),
                                                                ),
                                                            'ANM_CNM3A' =>
                                                                array(
                                                                    '@attributes' =>
                                                                        array(
                                                                            'lang' => 'kh',
                                                                        ),
                                                                ),
                                                            'ANM_CNM7A' =>
                                                                array(
                                                                    '@attributes' =>
                                                                        array(
                                                                            'lang' => 'kh',
                                                                        ),
                                                                ),
                                                            'ANM_CNMFE' =>
                                                                array(),
                                                            'ANM_CNM1E' =>
                                                                array(),
                                                            'ANM_CNM2E' =>
                                                                array(),
                                                            'ANM_CNM3E' =>
                                                                array(),
                                                            'ANM_CNM7E' =>
                                                                array(),
                                                            'ANM_LOAD_DT' => '18/10/2017',
                                                        ),
                                                    5 =>
                                                        array(
                                                            'ANM_CNMFA' => 'សេម',
                                                            'ANM_CNM1A' => 'ចន្ថា',
                                                            'ANM_CNM2A' =>
                                                                array(
                                                                    '@attributes' =>
                                                                        array(
                                                                            'lang' => 'kh',
                                                                        ),
                                                                ),
                                                            'ANM_CNM3A' =>
                                                                array(
                                                                    '@attributes' =>
                                                                        array(
                                                                            'lang' => 'kh',
                                                                        ),
                                                                ),
                                                            'ANM_CNM7A' =>
                                                                array(
                                                                    '@attributes' =>
                                                                        array(
                                                                            'lang' => 'kh',
                                                                        ),
                                                                ),
                                                            'ANM_CNMFE' => 'SEM',
                                                            'ANM_CNM1E' => 'CHANTHA',
                                                            'ANM_CNM2E' =>
                                                                array(),
                                                            'ANM_CNM3E' =>
                                                                array(),
                                                            'ANM_CNM7E' =>
                                                                array(),
                                                            'ANM_LOAD_DT' => '18/07/2017',
                                                        ),
                                                ),
                                        ),
                                    'PREV_ENQUIRIES' =>
                                        array(
                                            'PREV_ENQUIRY' =>
                                                array(
                                                    0 =>
                                                        array(
                                                            'PE_DATE' => '26/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY2_0211201824',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    1 =>
                                                        array(
                                                            'PE_DATE' => '21/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY2_0211201823',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    2 =>
                                                        array(
                                                            'PE_DATE' => '21/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY2_0211201822',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    3 =>
                                                        array(
                                                            'PE_DATE' => '21/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY2_0211201821',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    4 =>
                                                        array(
                                                            'PE_DATE' => '21/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY2_0211201820',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    5 =>
                                                        array(
                                                            'PE_DATE' => '21/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY2_0211201819',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    6 =>
                                                        array(
                                                            'PE_DATE' => '21/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY2_0211201818',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    7 =>
                                                        array(
                                                            'PE_DATE' => '19/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY#2_181119113900',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    8 =>
                                                        array(
                                                            'PE_DATE' => '19/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY#2_181119111437',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    9 =>
                                                        array(
                                                            'PE_DATE' => '19/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY#2_181119111150',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    10 =>
                                                        array(
                                                            'PE_DATE' => '19/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY#2_181119110727',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    11 =>
                                                        array(
                                                            'PE_DATE' => '19/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY#2_181119105912',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    12 =>
                                                        array(
                                                            'PE_DATE' => '19/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY#2_181119105335',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    13 =>
                                                        array(
                                                            'PE_DATE' => '16/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY2_0211201817',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    14 =>
                                                        array(
                                                            'PE_DATE' => '16/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY2_0211201815',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    15 =>
                                                        array(
                                                            'PE_DATE' => '16/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY2_0211201814',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    16 =>
                                                        array(
                                                            'PE_DATE' => '16/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY#2_181116030703',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    17 =>
                                                        array(
                                                            'PE_DATE' => '16/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY2_0211201813',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    18 =>
                                                        array(
                                                            'PE_DATE' => '16/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY2_0211201812',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    19 =>
                                                        array(
                                                            'PE_DATE' => '16/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY2_0211201811',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    20 =>
                                                        array(
                                                            'PE_DATE' => '16/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY2_0211201810',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    21 =>
                                                        array(
                                                            'PE_DATE' => '16/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY2_0211201809',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    22 =>
                                                        array(
                                                            'PE_DATE' => '16/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY#2_181116025112',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    23 =>
                                                        array(
                                                            'PE_DATE' => '16/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY#2_181116025019',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    24 =>
                                                        array(
                                                            'PE_DATE' => '16/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY#2_181116023809',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    25 =>
                                                        array(
                                                            'PE_DATE' => '16/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY#2_181116020019',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    26 =>
                                                        array(
                                                            'PE_DATE' => '16/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY#2_181116090722',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    27 =>
                                                        array(
                                                            'PE_DATE' => '16/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY#2_181116085339',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    28 =>
                                                        array(
                                                            'PE_DATE' => '15/11/2018',
                                                            'PE_ENQR' => 'Samrithisak Microfinance',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG 02112016333333S',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    29 =>
                                                        array(
                                                            'PE_DATE' => '15/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY2_0211201808',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    30 =>
                                                        array(
                                                            'PE_DATE' => '15/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'G',
                                                            'PE_MEMB_REF' => 'ENQUIRY1_0211201808',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '150000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សុង',
                                                                    'PE_NM1A' => 'ចាន់ណា',
                                                                    'PE_NMFE' => 'Song',
                                                                    'PE_NM1E' => 'Channa',
                                                                ),
                                                        ),
                                                    31 =>
                                                        array(
                                                            'PE_DATE' => '15/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY2_0211201807',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    32 =>
                                                        array(
                                                            'PE_DATE' => '15/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'G',
                                                            'PE_MEMB_REF' => 'ENQUIRY1_0211201807',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '150000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សុង',
                                                                    'PE_NM1A' => 'ចាន់ណា',
                                                                    'PE_NMFE' => 'Song',
                                                                    'PE_NM1E' => 'Channa',
                                                                ),
                                                        ),
                                                    33 =>
                                                        array(
                                                            'PE_DATE' => '15/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG_0211201851',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    34 =>
                                                        array(
                                                            'PE_DATE' => '15/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG_0211201850',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    35 =>
                                                        array(
                                                            'PE_DATE' => '15/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG_0211201841',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    36 =>
                                                        array(
                                                            'PE_DATE' => '15/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG_0211201840',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    37 =>
                                                        array(
                                                            'PE_DATE' => '15/11/2018',
                                                            'PE_ENQR' => 'Samrithisak Microfinance',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG 021120167777',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    38 =>
                                                        array(
                                                            'PE_DATE' => '15/11/2018',
                                                            'PE_ENQR' => 'Samrithisak Microfinance',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG 0211201644444',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    39 =>
                                                        array(
                                                            'PE_DATE' => '14/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY2_0211201806',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    40 =>
                                                        array(
                                                            'PE_DATE' => '14/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'G',
                                                            'PE_MEMB_REF' => 'ENQUIRY1_0211201806',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '150000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សុង',
                                                                    'PE_NM1A' => 'ចាន់ណា',
                                                                    'PE_NMFE' => 'Song',
                                                                    'PE_NM1E' => 'Channa',
                                                                ),
                                                        ),
                                                    41 =>
                                                        array(
                                                            'PE_DATE' => '14/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY2_0211201805',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    42 =>
                                                        array(
                                                            'PE_DATE' => '14/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY#2_181114043650',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    43 =>
                                                        array(
                                                            'PE_DATE' => '14/11/2018',
                                                            'PE_ENQR' => 'Samrithisak Microfinance',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG 04112016',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    44 =>
                                                        array(
                                                            'PE_DATE' => '14/11/2018',
                                                            'PE_ENQR' => 'Samrithisak Microfinance',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG 0211201633366',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    45 =>
                                                        array(
                                                            'PE_DATE' => '14/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY#2_181114041656',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    46 =>
                                                        array(
                                                            'PE_DATE' => '14/11/2018',
                                                            'PE_ENQR' => 'Samrithisak Microfinance',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG 02112016333333',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    47 =>
                                                        array(
                                                            'PE_DATE' => '14/11/2018',
                                                            'PE_ENQR' => 'Samrithisak Microfinance',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG 0211201633333',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    48 =>
                                                        array(
                                                            'PE_DATE' => '14/11/2018',
                                                            'PE_ENQR' => 'INTERNAL ADMINISTRATION',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG 0211201633333',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    49 =>
                                                        array(
                                                            'PE_DATE' => '14/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY#2_181114032910',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    50 =>
                                                        array(
                                                            'PE_DATE' => '14/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'G',
                                                            'PE_MEMB_REF' => 'ENQUIRY1_0211201805',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '150000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សុង',
                                                                    'PE_NM1A' => 'ចាន់ណា',
                                                                    'PE_NMFE' => 'Song',
                                                                    'PE_NM1E' => 'Channa',
                                                                ),
                                                        ),
                                                    51 =>
                                                        array(
                                                            'PE_DATE' => '14/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY2_0211201804',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    52 =>
                                                        array(
                                                            'PE_DATE' => '14/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'J',
                                                            'PE_MEMB_REF' => 'ENQUIRY1_0211201804',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '150000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សុង',
                                                                    'PE_NM1A' => 'ចាន់ណា',
                                                                    'PE_NMFE' => 'Song',
                                                                    'PE_NM1E' => 'Channa',
                                                                ),
                                                        ),
                                                    53 =>
                                                        array(
                                                            'PE_DATE' => '14/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY2_0211201803',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    54 =>
                                                        array(
                                                            'PE_DATE' => '14/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY2_0211201802',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    55 =>
                                                        array(
                                                            'PE_DATE' => '14/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY1_0211201802',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '150000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សុង',
                                                                    'PE_NM1A' => 'ចាន់ណា',
                                                                    'PE_NMFE' => 'Song',
                                                                    'PE_NM1E' => 'Channa',
                                                                ),
                                                        ),
                                                    56 =>
                                                        array(
                                                            'PE_DATE' => '14/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY2_0211201801',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    57 =>
                                                        array(
                                                            'PE_DATE' => '14/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY#2_20181114011352',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    58 =>
                                                        array(
                                                            'PE_DATE' => '14/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY#2_02112019091',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    59 =>
                                                        array(
                                                            'PE_DATE' => '14/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY#2_0211201909',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    60 =>
                                                        array(
                                                            'PE_DATE' => '13/11/2018',
                                                            'PE_ENQR' => 'INTERNAL ADMINISTRATION',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG 02112016DDD',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    61 =>
                                                        array(
                                                            'PE_DATE' => '13/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY#2_0211201806',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    62 =>
                                                        array(
                                                            'PE_DATE' => '13/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY#2_0211201805',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    63 =>
                                                        array(
                                                            'PE_DATE' => '13/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY#1_0211201805',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សាយ',
                                                                    'PE_NM1A' => 'សៀកឡេង',
                                                                    'PE_NMFE' => 'Say',
                                                                    'PE_NM1E' => 'Seakleng',
                                                                ),
                                                        ),
                                                    64 =>
                                                        array(
                                                            'PE_DATE' => '13/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY#2_0211201803',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    65 =>
                                                        array(
                                                            'PE_DATE' => '13/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY#1_0211201803',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    66 =>
                                                        array(
                                                            'PE_DATE' => '12/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY#2_0211201802',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    67 =>
                                                        array(
                                                            'PE_DATE' => '12/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY#1_0211201802',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    68 =>
                                                        array(
                                                            'PE_DATE' => '12/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY#2_0211201801',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    69 =>
                                                        array(
                                                            'PE_DATE' => '12/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'ENQUIRY#1_0211201801',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    70 =>
                                                        array(
                                                            'PE_DATE' => '07/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG_0211201835',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    71 =>
                                                        array(
                                                            'PE_DATE' => '07/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG_0211201834',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    72 =>
                                                        array(
                                                            'PE_DATE' => '07/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG_0211201833',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    73 =>
                                                        array(
                                                            'PE_DATE' => '07/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG_0211201832',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    74 =>
                                                        array(
                                                            'PE_DATE' => '07/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG_0211201825',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    75 =>
                                                        array(
                                                            'PE_DATE' => '07/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG_0211201824',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    76 =>
                                                        array(
                                                            'PE_DATE' => '07/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG_0211201827',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    77 =>
                                                        array(
                                                            'PE_DATE' => '07/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG_0211201823',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    78 =>
                                                        array(
                                                            'PE_DATE' => '07/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG_0211201822',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    79 =>
                                                        array(
                                                            'PE_DATE' => '07/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG_0211201821',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    80 =>
                                                        array(
                                                            'PE_DATE' => '07/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG_0211201820',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    81 =>
                                                        array(
                                                            'PE_DATE' => '06/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG_0211201817',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    82 =>
                                                        array(
                                                            'PE_DATE' => '06/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG_0211201816',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    83 =>
                                                        array(
                                                            'PE_DATE' => '06/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG_0211201814',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    84 =>
                                                        array(
                                                            'PE_DATE' => '06/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG_0211201815',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    85 =>
                                                        array(
                                                            'PE_DATE' => '06/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG_0211201813',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    86 =>
                                                        array(
                                                            'PE_DATE' => '06/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG_0211201811',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    87 =>
                                                        array(
                                                            'PE_DATE' => '06/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG_0211201809',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    88 =>
                                                        array(
                                                            'PE_DATE' => '06/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG_0211201807',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    89 =>
                                                        array(
                                                            'PE_DATE' => '06/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG_0211201805',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    90 =>
                                                        array(
                                                            'PE_DATE' => '06/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG_0211201803',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    91 =>
                                                        array(
                                                            'PE_DATE' => '06/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG_0211201802',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    92 =>
                                                        array(
                                                            'PE_DATE' => '06/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG_0211201801',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    93 =>
                                                        array(
                                                            'PE_DATE' => '06/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG 02112019',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    94 =>
                                                        array(
                                                            'PE_DATE' => '06/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG 02112018',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    95 =>
                                                        array(
                                                            'PE_DATE' => '06/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG 02112017',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    96 =>
                                                        array(
                                                            'PE_DATE' => '06/11/2018',
                                                            'PE_ENQR' => 'Phnom Penh Commercial Bank',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG 02112016',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    97 =>
                                                        array(
                                                            'PE_DATE' => '16/10/2018',
                                                            'PE_ENQR' => 'CHOKCHEY FINANCE PLC',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG 02112028',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    98 =>
                                                        array(
                                                            'PE_DATE' => '01/10/2018',
                                                            'PE_ENQR' => 'CHOKCHEY FINANCE PLC',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG 02112027',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    99 =>
                                                        array(
                                                            'PE_DATE' => '01/10/2018',
                                                            'PE_ENQR' => 'CHOKCHEY FINANCE PLC',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG 02112026',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                    100 =>
                                                        array(
                                                            'PE_DATE' => '28/09/2018',
                                                            'PE_ENQR' => 'CHOKCHEY FINANCE PLC',
                                                            'PE_TYPE' => 'NA',
                                                            'PE_ACCT' => 'S',
                                                            'PE_MEMB_REF' => 'TESTNG 02112025',
                                                            'PE_PRD' => 'AGL',
                                                            'PE_AMOUNT' => '140000.00',
                                                            'PE_CURR' => 'USD',
                                                            'PE_APPL' => 'P',
                                                            'PE_NAME' =>
                                                                array(
                                                                    'PE_NMFA' => 'សេម',
                                                                    'PE_NM1A' => 'ចន្ថា',
                                                                    'PE_NMFE' => 'SEM',
                                                                    'PE_NM1E' => 'CHANTHA',
                                                                ),
                                                        ),
                                                ),
                                        ),
                                    'ADDRESSES' =>
                                        array(
                                            'ADDRESS' =>
                                                array(
                                                    0 =>
                                                        array(
                                                            'CA_LOAD_DT' => '06/11/2018',
                                                            'CA_CADT' => 'WORK',
                                                            'CA_PROV' => '04',
                                                            'CA_DIST' => '0401',
                                                            'CA_COMM' => '040107',
                                                            'CA_VILL' => '04010701',
                                                            'CA_CAD9' => 'KHM',
                                                        ),
                                                    1 =>
                                                        array(
                                                            'CA_LOAD_DT' => '30/03/2018',
                                                            'CA_CADT' => 'WORK',
                                                            'CA_PROV' => '12',
                                                            'CA_DIST' => '1204',
                                                            'CA_COMM' => '120410',
                                                            'CA_VILL' => '12041001',
                                                            'CA_CAD9' => 'KHM',
                                                        ),
                                                    2 =>
                                                        array(
                                                            'CA_LOAD_DT' => '30/03/2018',
                                                            'CA_CADT' => 'WORK',
                                                            'CA_PROV' => '12',
                                                            'CA_DIST' => '1204',
                                                            'CA_COMM' => '120410',
                                                            'CA_VILL' => '12041005',
                                                            'CA_CAD9' => 'KHM',
                                                        ),
                                                ),
                                        ),
                                    'EMPLOYERS' =>
                                        array(
                                            'EMPLOYER' =>
                                                array(
                                                    0 =>
                                                        array(
                                                            'EDLD' => '06/11/2018',
                                                            'ETYP' => 'C',
                                                            'ESLF' => 'N',
                                                            'EOCE' => 'TRAVEL TOUR GUIDE',
                                                            'ELEN' => '10',
                                                            'ETMS' => '300.00',
                                                            'ECURR' => 'USD',
                                                            'ENME' => 'NONE',
                                                            'EADR' =>
                                                                array(
                                                                    'EA_CADT' => 'WORK',
                                                                    'EA_PROV' => '03',
                                                                    'EA_DIST' => '0301',
                                                                    'EA_COMM' => '030107',
                                                                    'EA_VILL' => '03010701',
                                                                    'EA_AD9' => 'KHM',
                                                                ),
                                                        ),
                                                    1 =>
                                                        array(
                                                            'EDLD' => '30/03/2018',
                                                            'ETYP' => 'P',
                                                            'ESLF' => 'Y',
                                                            'EOCE' => 'STAFF OF BACK',
                                                            'ELEN' => '24',
                                                            'ETMS' => '800.00',
                                                            'ECURR' => 'USD',
                                                            'ENME' => 'SAN BUNNA',
                                                            'EADR' =>
                                                                array(
                                                                    'EA_CADT' => 'WORK',
                                                                    'EA_PROV' => '12',
                                                                    'EA_DIST' => '1204',
                                                                    'EA_COMM' => '120410',
                                                                    'EA_VILL' => '12041001',
                                                                    'EA_AD9' => 'KHM',
                                                                ),
                                                        ),
                                                    2 =>
                                                        array(
                                                            'EDLD' => '30/03/2018',
                                                            'ETYP' => 'C',
                                                            'ESLF' => 'Y',
                                                            'EOCE' => 'SAN BUNNA',
                                                            'ELEN' => '10',
                                                            'ETMS' => '700.00',
                                                            'ECURR' => 'USD',
                                                            'ENME' => 'SAN BUNNA',
                                                            'EADR' =>
                                                                array(
                                                                    'EA_CADT' => 'WORK',
                                                                    'EA_PROV' => '03',
                                                                    'EA_DIST' => '0305',
                                                                    'EA_COMM' => '030503',
                                                                    'EA_VILL' => '03050304',
                                                                    'EA_AD9' => 'KHM',
                                                                ),
                                                        ),
                                                ),
                                        ),
                                    'ADVISORY_SUMMARY_TEXT' =>
                                        array(
                                            'ADVISORY_TEXT' => 'NOADV',
                                        ),
                                    'SUMMARY' =>
                                        array(
                                            'CNT_PE' => '101',
                                            'CNT_MTDE' => '97',
                                            'CNT_ACC' => '0',
                                            'CNT_ACC_NORM' => '0',
                                            'CNT_ACC_DELQ' => '0',
                                            'CNT_ACC_CLO' => '0',
                                            'CNT_ACC_REJ' => '0',
                                            'CNT_ACC_WRO' => '0',
                                            'CNT_GACC' => '0',
                                            'CNT_GACC_NORM' => '0',
                                            'CNT_GACC_DELQ' => '0',
                                            'CNT_GACC_ACC_CLO' => '0',
                                            'CNT_GACC_REJ' => '0',
                                            'CNT_GACC_WRO' => '0',
                                            'EISDT' =>
                                                array(),
                                            'TOT_LIMITS' =>
                                                array(
                                                    'TOT_LIM_CURR' =>
                                                        array(),
                                                    'TOT_LIM' => '0.00',
                                                ),
                                            'TOT_GLIMITS' =>
                                                array(
                                                    'TOT_GLIM_CURR' =>
                                                        array(),
                                                    'TOT_GLIM' => '0.00',
                                                ),
                                            'TOT_LIABILITIES' =>
                                                array(
                                                    'TOT_LIAB_CURR' =>
                                                        array(),
                                                    'TOT_LIAB' => '0.00',
                                                ),
                                            'TOT_GLIABILITIES' =>
                                                array(
                                                    'TOT_GLIAB_CURR' =>
                                                        array(),
                                                    'TOT_GLIAB' => '0.00',
                                                ),
                                            'TOT_WO_AMT' =>
                                                array(
                                                    'TOT_WO_CURR' =>
                                                        array(),
                                                    'TOT_WO' => '0.00',
                                                ),
                                            'TOT_GWO_AMT' =>
                                                array(
                                                    'TOT_GWO_CURR' =>
                                                        array(),
                                                    'TOT_GWO' => '0.00',
                                                ),
                                            'TOT_WO_OS_BALANCE' =>
                                                array(
                                                    'TOT_WO_OS_CURR' =>
                                                        array(),
                                                    'TOT_WO_OS_BAL' => '0.00',
                                                ),
                                            'TOT_GWO_OS_BALANCE' =>
                                                array(
                                                    'TOT_GWO_OS_CURR' =>
                                                        array(),
                                                    'TOT_GWO_OS_BAL' => '0.00',
                                                ),
                                        ),
                                    'SCORE' =>
                                        array(
                                            'SC_ERROR' => 'Applicant has no Primary accounts or no valid repayment status information',
                                        ),
                                ),
                            'DISCLAIMER' =>
                                array(
                                    'DI_TEXT' => 'This information has been collated from various sources. It does not represent the opinion of Credit Bureau Cambodia and Credit Bureau Cambodia assumes no responsibility for it. Credit Bureau Cambodia will not be liable (in contract or otherwise whatsoever) with respect to the collation or supply of the information or any use made of it, whether in relation to its accuracy or completeness or any other matter whatsoever. The information is supplied on a confidential basis to you and not for the use or reliance of any other party except any person on whose behalf you have sought the information.',
                                ),
                        ),
                ),
        ),
);