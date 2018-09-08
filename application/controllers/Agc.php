<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agc extends CI_Controller {

	function __construct(){
        parent::__construct();
        require(APPPATH.'middleware/simple_html_dom/simple_html_dom.php');
		$this->array_browser = array (
            "Internet Explorer" => array (
                "Mozilla/5.0 (compatible; MSIE 10.6; Windows NT 6.1; Trident/5.0; InfoPath.2; SLCC1; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; .NET CLR 2.0.50727) 3gpp-gba UNTRUSTED/1.0",
                "Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; WOW64; Trident/6.0)",
                "Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)",
                "Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/5.0)",
                "Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/4.0; InfoPath.2; SV1; .NET CLR 2.0.50727; WOW64)",
                "Mozilla/5.0 (compatible; MSIE 10.0; Macintosh; Intel Mac OS X 10_7_3; Trident/6.0)",
                "Mozilla/4.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/5.0)",
                "Mozilla/1.22 (compatible; MSIE 10.0; Windows 3.1)",
                "Mozilla/5.0 (Windows; U; MSIE 9.0; WIndows NT 9.0; en-US))",
                "Mozilla/5.0 (Windows; U; MSIE 9.0; Windows NT 9.0; en-US)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 7.1; Trident/5.0)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; Media Center PC 6.0; InfoPath.3; MS-RTC LM 8; Zune 4.7)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; Media Center PC 6.0; InfoPath.3; MS-RTC LM 8; Zune 4.7",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; Zune 4.0; InfoPath.3; MS-RTC LM 8; .NET4.0C; .NET4.0E)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; chromeframe/12.0.742.112)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET CLR 2.0.50727; Media Center PC 6.0)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET CLR 2.0.50727; Media Center PC 6.0)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0; .NET CLR 2.0.50727; SLCC2; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; Zune 4.0; Tablet PC 2.0; InfoPath.3; .NET4.0C; .NET4.0E)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; yie8)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.2; .NET CLR 1.1.4322; .NET4.0C; Tablet PC 2.0)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; FunWebProducts)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; chromeframe/13.0.782.215)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; chromeframe/11.0.696.57)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0) chromeframe/10.0.648.205",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/4.0; GTB7.4; InfoPath.1; SV1; .NET CLR 2.8.52393; WOW64; en-US)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/5.0; chromeframe/11.0.696.57)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/4.0; GTB7.4; InfoPath.3; SV1; .NET CLR 3.1.76908; WOW64; en-US)",
                "Mozilla/5.0 (Windows; U; MSIE 9.0; WIndows NT 9.0; en-US))",
                "Mozilla/5.0 (Windows; U; MSIE 9.0; Windows NT 9.0; en-US)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 7.1; Trident/5.0)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; Media Center PC 6.0; InfoPath.3; MS-RTC LM 8; Zune 4.7)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; Media Center PC 6.0; InfoPath.3; MS-RTC LM 8; Zune 4.7",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; Zune 4.0; InfoPath.3; MS-RTC LM 8; .NET4.0C; .NET4.0E)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; chromeframe/12.0.742.112)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET CLR 2.0.50727; Media Center PC 6.0)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET CLR 2.0.50727; Media Center PC 6.0)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0; .NET CLR 2.0.50727; SLCC2; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; Zune 4.0; Tablet PC 2.0; InfoPath.3; .NET4.0C; .NET4.0E)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; yie8)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.2; .NET CLR 1.1.4322; .NET4.0C; Tablet PC 2.0)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; FunWebProducts)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; chromeframe/13.0.782.215)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; chromeframe/11.0.696.57)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0) chromeframe/10.0.648.205",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/4.0; GTB7.4; InfoPath.1; SV1; .NET CLR 2.8.52393; WOW64; en-US)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/5.0; chromeframe/11.0.696.57)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/4.0; GTB7.4; InfoPath.3; SV1; .NET CLR 3.1.76908; WOW64; en-US)",
                "Mozilla/5.0 ( ; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0)",
                "Mozilla/4.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/4.0; GTB7.4; InfoPath.2; SV1; .NET CLR 4.4.58799; WOW64; en-US)",
                "Mozilla/4.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/4.0; FDM; MSIECrawler; Media Center PC 5.0)",
                "Mozilla/4.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/4.0; GTB7.4; InfoPath.3; SV1; .NET CLR 3.4.53360; WOW64; en-US)",
                "Mozilla/4.0 (compatible; MSIE 9.0; Windows NT 5.1; Trident/5.0)",
                "Mozilla/4.0 (compatible; MSIE 9.0; Windows NT 5.1; Trident/4.0; .NET CLR 2.0.50727; .NET CLR 1.1.4322; .NET CLR 3.0.04506.648; .NET CLR 3.5.21022; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; OfficeLiveConnector.1.4; OfficeLivePatch.1.3; .NET4.0C; .NE",
                "Mozilla/4.0 (compatible; MSIE 9.0; Windows 98; .NET CLR 3.0.04506.30)",
                "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 7.1; Trident/5.0; .NET CLR 2.0.50727; SLCC2; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.3; .NET4.0C)",
                "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E; AskTB5.5)",
                "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; InfoPath.2; .NET4.0C; .NET4.0E)",
                "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Win64; x64; Trident/5.0; .NET4.0C; .NET4.0E; InfoPath.3)",
                "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Win64; x64; Trident/5.0; .NET CLR 2.0.50727; SLCC2; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.3; .NET4.0C)",
                "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET4.0C)",
                "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; FDM; .NET CLR 1.1.4322; .NET4.0C; .NET4.0E; Tablet PC 2.0)",
                "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; Tablet PC 2.0; InfoPath.3; .NET4.0E)",
                "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Trident/5.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30729; FDM; .NET4.0C; .NET4.0E; chromeframe/11.0.696.57)",
                "Mozilla/4.0 (compatible; U; MSIE 9.0; WIndows NT 9.0; en-US)",
                "Mozilla/4.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; FunWebProducts)"
            ),
            "Firefox"=>array (
                "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:25.0) Gecko/20100101 Firefox/25.0",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.6; rv:25.0) Gecko/20100101 Firefox/25.0",
                "Mozilla/5.0 (Windows NT 6.0; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:24.0) Gecko/20100101 Firefox/24.0",
                "Mozilla/5.0 (Windows NT 6.2; rv:22.0) Gecko/20130405 Firefox/23.0",
                "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:23.0) Gecko/20130406 Firefox/23.0",
                "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:23.0) Gecko/20131011 Firefox/23.0",
                "Mozilla/5.0 (Windows NT 6.2; rv:22.0) Gecko/20130405 Firefox/22.0",
                "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:22.0) Gecko/20130328 Firefox/22.0",
                "Mozilla/5.0 (Windows NT 6.1; rv:22.0) Gecko/20130405 Firefox/22.0",
                "Mozilla/5.0 (Windows NT 6.2; Win64; x64; rv:16.0.1) Gecko/20121011 Firefox/21.0.1",
                "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:16.0.1) Gecko/20121011 Firefox/21.0.1",
                "Mozilla/5.0 (Windows NT 6.2; Win64; x64; rv:21.0.0) Gecko/20121011 Firefox/21.0.0",
                "Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:21.0) Gecko/20130331 Firefox/21.0",
                "Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:21.0) Gecko/20100101 Firefox/21.0",
                "Mozilla/5.0 (X11; Linux i686; rv:21.0) Gecko/20100101 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/20130326 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130401 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130331 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130330 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20100101 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20130401 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20130328 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20100101 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 5.1; rv:21.0) Gecko/20130401 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 5.1; rv:21.0) Gecko/20130331 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 5.1; rv:21.0) Gecko/20100101 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 5.0; rv:21.0) Gecko/20100101 Firefox/21.0",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:21.0) Gecko/20100101 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 6.2; Win64; x64;) Gecko/20100101 Firefox/20.0",
                "Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/19.0",
                "Mozilla/5.0 (Windows NT 6.1; rv:14.0) Gecko/20100101 Firefox/18.0.1",
                "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:18.0) Gecko/20100101 Firefox/18.0",
                "Mozilla/5.0 (X11; Ubuntu; Linux armv7l; rv:17.0) Gecko/20100101 Firefox/17.0",
                "Mozilla/6.0 (Windows NT 6.2; WOW64; rv:16.0.1) Gecko/20121011 Firefox/16.0.1",
                "Mozilla/5.0 (Windows NT 6.2; WOW64; rv:16.0.1) Gecko/20121011 Firefox/16.0.1",
                "Mozilla/5.0 (Windows NT 6.2; Win64; x64; rv:16.0.1) Gecko/20121011 Firefox/16.0.1",
                "Mozilla/5.0 (Windows NT 6.1; rv:15.0) Gecko/20120716 Firefox/15.0a2",
                "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.16) Gecko/20120427 Firefox/15.0a1",
                "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:15.0) Gecko/20120427 Firefox/15.0a1",
                "Mozilla/5.0 (Windows NT 6.2; WOW64; rv:15.0) Gecko/20120910144328 Firefox/15.0.2",
                "Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:15.0) Gecko/20100101 Firefox/15.0.1",
                "Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:15.0) Gecko/20121011 Firefox/15.0.1"
            ),
            "Chrome"=>array (
                "Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.17 Safari/537.36",
                "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36",
                "Mozilla/5.0 (X11; CrOS i686 4319.74.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36",
                "Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.2 Safari/537.36",
                "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1468.0 Safari/537.36",
                "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1467.0 Safari/537.36",
                "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1464.0 Safari/537.36",
                "Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36",
                "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36",
                "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36",
                "Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36",
                "Mozilla/5.0 (X11; CrOS i686 3912.101.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.116 Safari/537.36",
                "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.60 Safari/537.17",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_2) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1309.0 Safari/537.17",
                "Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.15 (KHTML, like Gecko) Chrome/24.0.1295.0 Safari/537.15",
                "Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.14 (KHTML, like Gecko) Chrome/24.0.1292.0 Safari/537.14",
                "Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.13 (KHTML, like Gecko) Chrome/24.0.1290.1 Safari/537.13",
                "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.13 (KHTML, like Gecko) Chrome/24.0.1290.1 Safari/537.13",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_2) AppleWebKit/537.13 (KHTML, like Gecko) Chrome/24.0.1290.1 Safari/537.13",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.13 (KHTML, like Gecko) Chrome/24.0.1290.1 Safari/537.13",
                "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.13 (KHTML, like Gecko) Chrome/24.0.1284.0 Safari/537.13",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_2) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.6 Safari/537.11",
                "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.26 Safari/537.11",
                "Mozilla/5.0 (Windows NT 6.0) yi; AppleWebKit/345667.12221 (KHTML, like Gecko) Chrome/23.0.1271.26 Safari/453667.1221",
                "Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.17 Safari/537.11",
                "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_0) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.79 Safari/537.4",
                "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.2 (KHTML, like Gecko) Chrome/22.0.1216.0 Safari/537.2",
                "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/22.0.1207.1 Safari/537.1",
                "Mozilla/5.0 (X11; CrOS i686 2268.111.0) AppleWebKit/536.11 (KHTML, like Gecko) Chrome/20.0.1132.57 Safari/536.11",
                "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.6 (KHTML, like Gecko) Chrome/20.0.1092.0 Safari/536.6",
                "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/536.6 (KHTML, like Gecko) Chrome/20.0.1090.0 Safari/536.6",
                "Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/19.77.34.5 Safari/537.1",
                "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.9 Safari/536.5",
                "Mozilla/5.0 (Windows NT 6.0) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.36 Safari/536.5",
                "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1063.0 Safari/536.3",
                "Mozilla/5.0 (Windows NT 5.1) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1063.0 Safari/536.3",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_0) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1063.0 Safari/536.3",
                "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1062.0 Safari/536.3",
                "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1062.0 Safari/536.3",
                "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1061.1 Safari/536.3",
                "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1061.1 Safari/536.3",
                "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1061.1 Safari/536.3",
                "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1061.0 Safari/536.3",
                "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.24 (KHTML, like Gecko) Chrome/19.0.1055.1 Safari/535.24",
                "Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/535.24 (KHTML, like Gecko) Chrome/19.0.1055.1 Safari/535.24",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_2) AppleWebKit/535.24 (KHTML, like Gecko) Chrome/19.0.1055.1 Safari/535.24",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_3) AppleWebKit/535.22 (KHTML, like Gecko) Chrome/19.0.1047.0 Safari/535.22",
                "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.21 (KHTML, like Gecko) Chrome/19.0.1042.0 Safari/535.21",
                "Mozilla/5.0 (X11; Linux i686) AppleWebKit/535.21 (KHTML, like Gecko) Chrome/19.0.1041.0 Safari/535.21",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_3) AppleWebKit/535.20 (KHTML, like Gecko) Chrome/19.0.1036.7 Safari/535.20",
                "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/535.2 (KHTML, like Gecko) Chrome/18.6.872.0 Safari/535.2 UNTRUSTED/1.0 3gpp-gba UNTRUSTED/1.0",
                "Mozilla/5.0 (Macintosh; AMD Mac OS X 10_8_2) AppleWebKit/535.22 (KHTML, like Gecko) Chrome/18.6.872",
                "Mozilla/5.0 (X11; CrOS i686 1660.57.0) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.46 Safari/535.19",
                "Mozilla/5.0 (Windows NT 6.0; WOW64) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.45 Safari/535.19",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_2) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.45 Safari/535.19",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.45 Safari/535.19"
            ),
            "Safari"=>array(
                "Mozilla/5.0 (iPad; CPU OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A5355d Safari/8536.25",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/537.13+ (KHTML, like Gecko) Version/5.1.7 Safari/534.57.2",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_3) AppleWebKit/534.55.3 (KHTML, like Gecko) Version/5.1.3 Safari/534.53.10",
                "Mozilla/5.0 (iPad; CPU OS 5_1 like Mac OS X) AppleWebKit/534.46 (KHTML, like Gecko ) Version/5.1 Mobile/9B176 Safari/7534.48.3",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_8; de-at) AppleWebKit/533.21.1 (KHTML, like Gecko) Version/5.0.5 Safari/533.21.1",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_7; da-dk) AppleWebKit/533.21.1 (KHTML, like Gecko) Version/5.0.5 Safari/533.21.1",
                "Mozilla/5.0 (Windows; U; Windows NT 6.1; tr-TR) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Windows; U; Windows NT 6.1; ko-KR) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Windows; U; Windows NT 6.1; fr-FR) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Windows; U; Windows NT 6.1; cs-CZ) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Windows; U; Windows NT 6.0; ja-JP) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_8; zh-cn) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_8; ja-jp) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_7; ja-jp) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_6; zh-cn) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_6; sv-se) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_6; ko-kr) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_6; ja-jp) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_6; it-it) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_6; fr-fr) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_6; es-es) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_6; en-us) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_6; en-gb) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_6; de-de) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Windows; U; Windows NT 6.1; sv-SE) AppleWebKit/533.19.4 (KHTML, like Gecko) Version/5.0.3 Safari/533.19.4",
                "Mozilla/5.0 (Windows; U; Windows NT 6.1; ja-JP) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.3 Safari/533.19.4",
                "Mozilla/5.0 (Windows; U; Windows NT 6.1; de-DE) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.3 Safari/533.19.4",
                "Mozilla/5.0 (Windows; U; Windows NT 6.0; hu-HU) AppleWebKit/533.19.4 (KHTML, like Gecko) Version/5.0.3 Safari/533.19.4",
                "Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.3 Safari/533.19.4",
                "Mozilla/5.0 (Windows; U; Windows NT 6.0; de-DE) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.3 Safari/533.19.4",
                "Mozilla/5.0 (Windows; U; Windows NT 5.1; ru-RU) AppleWebKit/533.19.4 (KHTML, like Gecko) Version/5.0.3 Safari/533.19.4",
                "Mozilla/5.0 (Windows; U; Windows NT 5.1; ja-JP) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.3 Safari/533.19.4",
                "Mozilla/5.0 (Windows; U; Windows NT 5.1; it-IT) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.3 Safari/533.19.4",
                "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.3 Safari/533.19.4",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_7; en-us) AppleWebKit/534.16+ (KHTML, like Gecko) Version/5.0.3 Safari/533.19.4",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_6; fr-ch) AppleWebKit/533.19.4 (KHTML, like Gecko) Version/5.0.3 Safari/533.19.4",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_5; de-de) AppleWebKit/534.15+ (KHTML, like Gecko) Version/5.0.3 Safari/533.19.4",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_5; ar) AppleWebKit/533.19.4 (KHTML, like Gecko) Version/5.0.3 Safari/533.19.4",
                "Mozilla/5.0 (Android 2.2; Windows; U; Windows NT 6.1; en-US) AppleWebKit/533.19.4 (KHTML, like Gecko) Version/5.0.3 Safari/533.19.4",
                "Mozilla/5.0 (Windows; U; Windows NT 6.1; zh-HK) AppleWebKit/533.18.1 (KHTML, like Gecko) Version/5.0.2 Safari/533.18.5",
                "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/533.19.4 (KHTML, like Gecko) Version/5.0.2 Safari/533.18.5",
                "Mozilla/5.0 (Windows; U; Windows NT 6.0; tr-TR) AppleWebKit/533.18.1 (KHTML, like Gecko) Version/5.0.2 Safari/533.18.5",
                "Mozilla/5.0 (Windows; U; Windows NT 6.0; nb-NO) AppleWebKit/533.18.1 (KHTML, like Gecko) Version/5.0.2 Safari/533.18.5",
                "Mozilla/5.0 (Windows; U; Windows NT 6.0; fr-FR) AppleWebKit/533.18.1 (KHTML, like Gecko) Version/5.0.2 Safari/533.18.5",
                "Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-TW) AppleWebKit/533.19.4 (KHTML, like Gecko) Version/5.0.2 Safari/533.18.5",
                "Mozilla/5.0 (Windows; U; Windows NT 5.1; ru-RU) AppleWebKit/533.18.1 (KHTML, like Gecko) Version/5.0.2 Safari/533.18.5",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_8; zh-cn) AppleWebKit/533.18.1 (KHTML, like Gecko) Version/5.0.2 Safari/533.18.5",
                "Mozilla/5.0 (iPod; U; CPU iPhone OS 4_3_3 like Mac OS X; ja-jp) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8J2 Safari/6533.18.5",
                "Mozilla/5.0 (iPod; U; CPU iPhone OS 4_3_1 like Mac OS X; zh-cn) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8G4 Safari/6533.18.5",
                "Mozilla/5.0 (iPod; U; CPU iPhone OS 4_2_1 like Mac OS X; he-il) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8C148 Safari/6533.18.5",
                "Mozilla/5.0 (iPhone; U; ru; CPU iPhone OS 4_2_1 like Mac OS X; ru) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8C148a Safari/6533.18.5",
                "Mozilla/5.0 (iPhone; U; ru; CPU iPhone OS 4_2_1 like Mac OS X; fr) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8C148a Safari/6533.18.5",
                "Mozilla/5.0 (iPhone; U; fr; CPU iPhone OS 4_2_1 like Mac OS X; fr) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8C148a Safari/6533.18.5",
                "Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_1 like Mac OS X; zh-tw) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8G4 Safari/6533.18.5",
                "Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3 like Mac OS X; pl-pl) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8F190 Safari/6533.18.5",
                "Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3 like Mac OS X; fr-fr) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8F190 Safari/6533.18.5",
                "Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3 like Mac OS X; en-gb) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8F190 Safari/6533.18.5",
                "Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_2_1 like Mac OS X; ru-ru) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8C148 Safari/6533.18.5",
                "Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_2_1 like Mac OS X; nb-no) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8C148a Safari/6533.18.5",
                "Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/533.17.8 (KHTML, like Gecko) Version/5.0.1 Safari/533.17.8",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_4; th-th) AppleWebKit/533.17.8 (KHTML, like Gecko) Version/5.0.1 Safari/533.17.8",
                "Mozilla/5.0 (X11; U; Linux x86_64; en-us) AppleWebKit/531.2+ (KHTML, like Gecko) Version/5.0 Safari/531.2+",
                "Mozilla/5.0 (X11; U; Linux x86_64; en-ca) AppleWebKit/531.2+ (KHTML, like Gecko) Version/5.0 Safari/531.2+",
                "Mozilla/5.0 (Windows; U; Windows NT 6.1; ja-JP) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Windows; U; Windows NT 6.1; es-ES) AppleWebKit/533.18.1 (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/533.18.1 (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Windows; U; Windows NT 6.0; ja-JP) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_8; ja-jp) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_4_11; fr) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; zh-cn) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; ru-ru) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; ko-kr) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; it-it) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; HTC-P715a; en-ca) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; en-us) AppleWebKit/534.1+ (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; en-au) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; el-gr) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; ca-es) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_8; zh-tw) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_8; ja-jp) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_8; it-it) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16"
            ),
            "Opera"=>array(
                "Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14",
                "Mozilla/5.0 (Windows NT 6.0; rv:2.0) Gecko/20100101 Firefox/4.0 Opera 12.14",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0) Opera 12.14",
                "Opera/12.80 (Windows NT 5.1; U; en) Presto/2.10.289 Version/12.02",
                "Opera/9.80 (Windows NT 6.1; U; es-ES) Presto/2.9.181 Version/12.00",
                "Opera/9.80 (Windows NT 5.1; U; zh-sg) Presto/2.9.181 Version/12.00",
                "Opera/12.0(Windows NT 5.2;U;en)Presto/22.9.168 Version/12.00",
                "Opera/12.0(Windows NT 5.1;U;en)Presto/22.9.168 Version/12.00",
                "Mozilla/5.0 (Windows NT 5.1) Gecko/20100101 Firefox/14.0 Opera/12.0",
                "Opera/9.80 (Windows NT 6.1; WOW64; U; pt) Presto/2.10.229 Version/11.62",
                "Opera/9.80 (Windows NT 6.0; U; pl) Presto/2.10.229 Version/11.62",
                "Opera/9.80 (Macintosh; Intel Mac OS X 10.6.8; U; fr) Presto/2.9.168 Version/11.52",
                "Opera/9.80 (Macintosh; Intel Mac OS X 10.6.8; U; de) Presto/2.9.168 Version/11.52",
                "Opera/9.80 (Windows NT 5.1; U; en) Presto/2.9.168 Version/11.51",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; de) Opera 11.51",
                "Opera/9.80 (X11; Linux x86_64; U; fr) Presto/2.9.168 Version/11.50",
                "Opera/9.80 (X11; Linux i686; U; hu) Presto/2.9.168 Version/11.50",
                "Opera/9.80 (X11; Linux i686; U; ru) Presto/2.8.131 Version/11.11",
                "Opera/9.80 (X11; Linux i686; U; es-ES) Presto/2.8.131 Version/11.11",
                "Mozilla/5.0 (Windows NT 5.1; U; en; rv:1.8.1) Gecko/20061208 Firefox/5.0 Opera 11.11",
                "Opera/9.80 (X11; Linux x86_64; U; bg) Presto/2.8.131 Version/11.10",
                "Opera/9.80 (Windows NT 6.0; U; en) Presto/2.8.99 Version/11.10",
                "Opera/9.80 (Windows NT 5.1; U; zh-tw) Presto/2.8.131 Version/11.10",
                "Opera/9.80 (Windows NT 6.1; Opera Tablet/15165; U; en) Presto/2.8.149 Version/11.1",
                "Opera/9.80 (X11; Linux x86_64; U; Ubuntu/10.10 (maverick); pl) Presto/2.7.62 Version/11.01",
                "Opera/9.80 (X11; Linux i686; U; ja) Presto/2.7.62 Version/11.01",
                "Opera/9.80 (X11; Linux i686; U; fr) Presto/2.7.62 Version/11.01",
                "Opera/9.80 (Windows NT 6.1; U; zh-tw) Presto/2.7.62 Version/11.01",
                "Opera/9.80 (Windows NT 6.1; U; zh-cn) Presto/2.7.62 Version/11.01",
                "Opera/9.80 (Windows NT 6.1; U; sv) Presto/2.7.62 Version/11.01",
                "Opera/9.80 (Windows NT 6.1; U; en-US) Presto/2.7.62 Version/11.01",
                "Opera/9.80 (Windows NT 6.1; U; cs) Presto/2.7.62 Version/11.01",
                "Opera/9.80 (Windows NT 6.0; U; pl) Presto/2.7.62 Version/11.01",
                "Opera/9.80 (Windows NT 5.2; U; ru) Presto/2.7.62 Version/11.01",
                "Opera/9.80 (Windows NT 5.1; U;) Presto/2.7.62 Version/11.01",
                "Opera/9.80 (Windows NT 5.1; U; cs) Presto/2.7.62 Version/11.01",
                "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.13) Gecko/20101213 Opera/9.80 (Windows NT 6.1; U; zh-tw) Presto/2.7.62 Version/11.01",
                "Mozilla/5.0 (Windows NT 6.1; U; nl; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 11.01",
                "Mozilla/5.0 (Windows NT 6.1; U; de; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 11.01",
                "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; de) Opera 11.01",
                "Opera/9.80 (X11; Linux x86_64; U; pl) Presto/2.7.62 Version/11.00",
                "Opera/9.80 (X11; Linux i686; U; it) Presto/2.7.62 Version/11.00",
                "Opera/9.80 (Windows NT 6.1; U; zh-cn) Presto/2.6.37 Version/11.00",
                "Opera/9.80 (Windows NT 6.1; U; pl) Presto/2.7.62 Version/11.00",
                "Opera/9.80 (Windows NT 6.1; U; ko) Presto/2.7.62 Version/11.00",
                "Opera/9.80 (Windows NT 6.1; U; fi) Presto/2.7.62 Version/11.00",
                "Opera/9.80 (Windows NT 6.1; U; en-GB) Presto/2.7.62 Version/11.00",
                "Opera/9.80 (Windows NT 6.1 x64; U; en) Presto/2.7.62 Version/11.00",
                "Opera/9.80 (Windows NT 6.0; U; en) Presto/2.7.39 Version/11.00",
                "Opera/9.80 (Windows NT 5.1; U; ru) Presto/2.7.39 Version/11.00",
                "Opera/9.80 (Windows NT 5.1; U; MRA 5.5 (build 02842); ru) Presto/2.7.62 Version/11.00",
                "Opera/9.80 (Windows NT 5.1; U; it) Presto/2.7.62 Version/11.00",
                "Mozilla/5.0 (Windows NT 6.0; U; ja; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 11.00",
                "Mozilla/5.0 (Windows NT 5.1; U; pl; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 11.00",
                "Mozilla/5.0 (Windows NT 5.1; U; de; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 11.00",
                "Mozilla/4.0 (compatible; MSIE 8.0; X11; Linux x86_64; pl) Opera 11.00",
                "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; fr) Opera 11.00",
                "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; ja) Opera 11.00",
                "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; en) Opera 11.00",
                "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; pl) Opera 11.00",
                "Opera/9.80 (Windows NT 6.1; U; pl) Presto/2.6.31 Version/10.70",
                "Mozilla/5.0 (Windows NT 5.2; U; ru; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.70",
                "Mozilla/5.0 (Windows NT 5.1; U; zh-cn; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.70",
                "Opera/9.80 (Windows NT 5.2; U; zh-cn) Presto/2.6.30 Version/10.63",
                "Opera/9.80 (Windows NT 5.2; U; en) Presto/2.6.30 Version/10.63",
                "Opera/9.80 (Windows NT 5.1; U; MRA 5.6 (build 03278); ru) Presto/2.6.30 Version/10.63",
                "Opera/9.80 (Windows NT 5.1; U; pl) Presto/2.6.30 Version/10.62",
                "Mozilla/5.0 (X11; Linux x86_64; U; de; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.62",
                "Mozilla/4.0 (compatible; MSIE 8.0; X11; Linux x86_64; de) Opera 10.62",
                "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; en) Opera 10.62",
                "Opera/9.80 (X11; Linux i686; U; pl) Presto/2.6.30 Version/10.61",
                "Opera/9.80 (X11; Linux i686; U; es-ES) Presto/2.6.30 Version/10.61",
                "Opera/9.80 (Windows NT 6.1; U; zh-cn) Presto/2.6.30 Version/10.61",
                "Opera/9.80 (Windows NT 6.1; U; en) Presto/2.6.30 Version/10.61",
                "Opera/9.80 (Windows NT 6.0; U; it) Presto/2.6.30 Version/10.61",
                "Opera/9.80 (Windows NT 5.2; U; ru) Presto/2.6.30 Version/10.61",
                "Opera/9.80 (Windows 98; U; de) Presto/2.6.30 Version/10.61",
                "Opera/9.80 (Macintosh; Intel Mac OS X; U; nl) Presto/2.6.30 Version/10.61",
                "Opera/9.80 (X11; Linux i686; U; en) Presto/2.5.27 Version/10.60",
                "Opera/9.80 (Windows NT 6.0; U; nl) Presto/2.6.30 Version/10.60",
                "Opera/10.60 (Windows NT 5.1; U; zh-cn) Presto/2.6.30 Version/10.60",
                "Opera/10.60 (Windows NT 5.1; U; en-US) Presto/2.6.30 Version/10.60",
                "Opera/9.80 (X11; Linux i686; U; it) Presto/2.5.24 Version/10.54",
                "Opera/9.80 (X11; Linux i686; U; en-GB) Presto/2.5.24 Version/10.53",
                "Mozilla/5.0 (Windows NT 5.1; U; zh-cn; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.53",
                "Mozilla/5.0 (Windows NT 5.1; U; Firefox/5.0; en; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.53",
                "Mozilla/5.0 (Windows NT 5.1; U; Firefox/4.5; en; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.53",
                "Mozilla/5.0 (Windows NT 5.1; U; Firefox/3.5; en; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.53",
                "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; ko) Opera 10.53",
                "Opera/9.80 (Windows NT 6.1; U; fr) Presto/2.5.24 Version/10.52",
                "Opera/9.80 (Windows NT 6.1; U; en) Presto/2.5.22 Version/10.51",
                "Opera/9.80 (Windows NT 6.0; U; cs) Presto/2.5.22 Version/10.51",
                "Opera/9.80 (Windows NT 5.2; U; ru) Presto/2.5.22 Version/10.51",
                "Opera/9.80 (Linux i686; U; en) Presto/2.5.22 Version/10.51",
                "Mozilla/5.0 (Windows NT 6.1; U; en-GB; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.51",
                "Mozilla/5.0 (Linux i686; U; en; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.51",
                "Mozilla/4.0 (compatible; MSIE 8.0; Linux i686; en) Opera 10.51",
                "Opera/9.80 (Windows NT 6.1; U; zh-tw) Presto/2.5.22 Version/10.50",
                "Opera/9.80 (Windows NT 6.1; U; zh-cn) Presto/2.5.22 Version/10.50",
                "Opera/9.80 (Windows NT 6.1; U; sk) Presto/2.6.22 Version/10.50",
                "Opera/9.80 (Windows NT 6.1; U; ja) Presto/2.5.22 Version/10.50",
                "Opera/9.80 (Windows NT 6.0; U; zh-cn) Presto/2.5.22 Version/10.50",
                "Opera/9.80 (Windows NT 5.1; U; sk) Presto/2.5.22 Version/10.50",
                "Opera/9.80 (Windows NT 5.1; U; ru) Presto/2.5.22 Version/10.50",
                "Opera/10.50 (Windows NT 6.1; U; en-GB) Presto/2.2.2",
                "Opera/9.80 (S60; SymbOS; Opera Tablet/9174; U; en) Presto/2.7.81 Version/10.5",
                "Opera/9.80 (X11; U; Linux i686; en-US; rv:1.9.2.3) Presto/2.2.15 Version/10.10",
                "Opera/9.80 (X11; Linux x86_64; U; it) Presto/2.2.15 Version/10.10",
                "Opera/9.80 (Windows NT 6.1; U; de) Presto/2.2.15 Version/10.10",
                "Opera/9.80 (Windows NT 6.0; U; Gecko/20100115; pl) Presto/2.2.15 Version/10.10",
                "Opera/9.80 (Windows NT 6.0; U; en) Presto/2.2.15 Version/10.10",
                "Opera/9.80 (Windows NT 5.1; U; de) Presto/2.2.15 Version/10.10",
                "Opera/9.80 (Windows NT 5.1; U; cs) Presto/2.2.15 Version/10.10",
                "Mozilla/5.0 (Windows NT 6.0; U; tr; rv:1.8.1) Gecko/20061208 Firefox/2.0.0 Opera 10.10",
                "Mozilla/4.0 (compatible; MSIE 6.0; X11; Linux i686; de) Opera 10.10",
                "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 6.0; tr) Opera 10.10",
                "Opera/9.80 (X11; Linux x86_64; U; en-GB) Presto/2.2.15 Version/10.01",
                "Opera/9.80 (X11; Linux x86_64; U; en) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (X11; Linux x86_64; U; de) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (X11; Linux i686; U; ru) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (X11; Linux i686; U; pt-BR) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (X11; Linux i686; U; pl) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (X11; Linux i686; U; nb) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (X11; Linux i686; U; en-GB) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (X11; Linux i686; U; en) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (X11; Linux i686; U; Debian; pl) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (X11; Linux i686; U; de) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (Windows NT 6.1; U; zh-cn) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (Windows NT 6.1; U; fi) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (Windows NT 6.1; U; en) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (Windows NT 6.1; U; de) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (Windows NT 6.1; U; cs) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (Windows NT 6.0; U; en) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (Windows NT 6.0; U; de) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (Windows NT 5.2; U; en) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (Windows NT 5.1; U; zh-cn) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (Windows NT 5.1; U; ru) Presto/2.2.15 Version/10.00"
            )
        );
        
        $this->str_badword = '17tahun,2g1c,3d,3gp,3some,4chan,4r5e,4some,5h1t,5hit,a_s_s,a2m,a55,abortion,acrotomophilia,ads,adult,ahole,akka,allah,amateur,amazon,amcik,amp,anal,analingus,analplay,anal-play,androsodomy,andskota,anilingus,annie sprinkle,answer,anus,app,apple bong,ar5e,architec,arrse,arschloch,arse,arsehole,artisan,aryan,asexual,ash0le,ashley,ashole,asian babe,ass,asses,assfucker,ass-fucker,assfukka,asshole,assholes,asslick,assmunch,assplay,ass-playauto-eroticism,assrammer,asswhole,attack,auto erotic,autocad,autoerotic,autofellatio,autopederasty,ayir,azzhole,b!+ch,b!tch,b00b,b00bs,b17ch,b1tch,babe,babeland,babes,babes in toyland,baby batter,baby chowder,ball gag,ball gravy,ball kicking,ball licking,ball sack,ball sucking,ballbag,ballgag,ball-gag,balls,ballsack,bangbros,bangla,bareback,barebacking,barely legal,barenaked ladies,bassterd,bastard,bastardo,basterd,bastinado,bbw,bdsm,beaner,bearded clam,beastial,beastiality,beastilaity,beaver cleaver,beaver lips,begin,behind the green door,bellend,berniaga,bestial,bestiality,betty dodson,bi curious,bi+ch,bi7ch,bianca beauchamp,biatch,bible,big black,big knockers,big tits,bikini,bimbo,bimbos,birahi,birdlock,bisexual,bispak,bitch,bitch ,bitcher,bitchers,bitches,bitchin,bitching,black cock,blog,blonde action,blonde on blonde action,blood play,bloody,blow,blow j,blow job,blow your l,blowjob,blow-job,blowjobs,bludgeon,blue waffle,blueprint,blumpkin,boffing,bogel,boiolas,bokep,bollock,bollocks,bollok,bomb,bondage,boner,boob,boobies,boobs,book,booobs,boooobs,booooobs,booooooobs,booty call,breas,breast,breasts,brown showers,brunette action,buceta,budget,bugger,buggery,bugil,bukake,bukakke,bukkake,bulldyke,bull-dyke,bulldykes,bull-dykes,bullet vibe,bum,bumming,bung hole,bunghole,bunny fucker,busty,butt,buttcheeks,buttcrack,butthole,buttmuch,buttocks,butt-pirate,buttplug,butt-plug,buttplugs,butt-plugs,butts,buy,c0ck,c0cksucker,cabron,cake,camel toe,cameltoe,cameltoes,camgirl,camslut,camwhore,carnage,carol queen,carpet muncher,carpetmuncher,cartel,casino,catalog,category,cawk,cazzo,cerita dewasa,cerita hot,cerita panas,cerita seru,chastity belt,cheap,chick,chicks,chink,chocolate rosebuds,choda,chord,chraa,chrissie wunna,christian,chudai,chuj,church of satan,cipa,cipki,circlejerk,cl1t,cleveland steamer,click,clit,clitoral,clitoris,clitoritis,clits,clover clamps,clusterfuck,cnts,cntz,cnut,cocaine,cock,cockface,cockhead,cockmunch,cockmuncher,cocks,cocksuck,cocksuck ,cocksucked,cocksucked ,cocksucker,cock-sucker,cocksucking,cocksucks,cocksucks ,cocksuka,cocksukka,cok,cokmuncher,coksucka,college,com,commie,concept,condom,consensual intercourse,contest,coon,coprolagnia,coprophagia,coprophagy,coprophilia,cornhole,cornholes,corpophilia,corpophilic,cory silverberg,cost,coupon code,coupons,courtney trouble,cox,crack,crackz,crap,cream pie,creampie,cream-pie,creamypie,crossdresser,cuckold,cum,cummer,cumming,cumpic,cums,cumshot,cumshots,cunilingus,cunillingus,cunnilingus,cunt,cuntlick,cuntlick ,cuntlicker,cuntlicker ,cuntlicking,cuntlicking ,cunts,cyalis,cyberfuc,cyberfuck,cyberfuck ,cyberfucked,cyberfucked ,cyberfucker,cyberfuckers,cyberfucking,cyberfucking ,d1ck,d4mn,dago,damn,daniel brou,darkie,data,date rape,daterape,david neil wallace,daygo,death,deep throat,deepthroat,defecated,defecating,defecation,dego,designer,desnuda,di jual,dick,dickhead,dicks,diddy ride,die,dijual,dike,dild0,dildo,dildoes,dildos,dilld0,dink,dinks,dirsa,dirt bike,dirty pillows,dirty sanchez,discount,disembowel,dismember,dlck,dnwallace,dog style,dog-fucker,doggie style,doggiestyle,doggin,dogging,doggy style,doggystyle,dolcett,domination,dominatricks,dominatrics,dominatrix,dommes,donkey punch,donkeyribber,doosh,dothead,double dong,double penetration,douche,douches,douching,download,drawing,drug,drugs,duche,ducky doolittle,dupa,dutch oven,dwg,dyke,dykes,dziwka,eat my ass,ebay,ebook,ecchi,ecstasy,ejackulate,ejaculate,ejaculated,ejaculates,ejaculates ,ejaculating,ejaculating ,ejaculatings,ejaculation,ejakulate,ekrem,ekto,electrotorture,elevation,enculer,enema,enemas,engine,ensiklopedia bebas,erection,erections,erotic,erotica,erotism,escort,ethical slut,eunuch,example,excrement,extreme elvis,f u c k,f u c k e r,f_u_c_k,f4nny,facesit,facesitting,facial,facials,faen,fag,fag1t,faget,fagging,faggit,faggitt,faggot,faggs,fagit,fagot,fagots,fags,fagz,faig,faigs,fanculo,fanny,fannyflaps,fannyfucker,fantasies,fanyy,fapserver,fart,farted,farting,fascist,fatass,fcuk,fcuker,fcuking,fecal,feces,feck,fecker,feg,felch,felcher,felching,fellate,fellatio,feltch,female desperation,female squirting,femdom,feminazi,fetish,fetishes,ficken,figging,file,filthy sanchez,fingerfuck,fingerfuck ,fingerfucked,fingerfucked ,fingerfucker,fingerfucker ,fingerfuckers,fingerfucking,fingerfucking ,fingerfucks,fingerfucks ,fingering,fistfuck,fistfucked,fistfucked ,fistfucker,fistfucker ,fistfuckers,fistfuckers ,fistfucking,fistfucking ,fistfuckings,fistfuckings ,fistfucks,fistfucks ,fisting,fitt,five knuckle shuffle,flange,flick the bean,flikker,fook,fooker,foot fetish,footjob,for hire,for rent,for sale,foreplay,foreskin,fornicate,fotze,foursome,free,free download,free shipping,freeones,frotting,fuck,fuck buttons,fucka,fucked,fucker,fuckers,fuckhead,fuckheads,fuckin,fucking,fuckings,fuckingshitmotherfucker,fuckme,fuckme ,fucks,fuckwhit,fuckwit,fudge packer,fudgepacker,fuk,fukah,fuken,fuker,fukin,fukk,fukker,fukkin,fuks,fukwhit,fukwit,futanari,futkretzn,fux,fux0r,g00k,gag,gamble,gambling,game,games,gang bang,gangbang,gang-bang,gangbanged,gangbanged ,gangbangs,gangbangs ,gay,gay boy,gay dog,gay man,gay men,gay sex,gaylord,gaysex,genital,genitalia,genitals,get my sister,giant cock,ginger lynne,girl,girl on,girl on top,girls gone wild,gloryhole,glory-hole,gloryholes,glory-holes,goat.se,goatcx,goatse,god,god damn,god-dam,goddamn,goddamned,god-damned,gods,gokkun,golden shower,golliwog,goo girl,good poop,goodpoop,goodvibes,google is evil,gook,goregasm,got my sister,greaser,gringo,grope,group sex,groupsex,gspot,g-spot,g-string,gtfo,guide,guiena,guro,h00r,h0ar,h0r,h0re,h4x0r,hairy,halloween,hand job,handjob,hand-job,happy slapping video,hard core,hardcore,hardcoresex,hardcoresex ,harga,hate,hebe,hedop,hell,helvete,hentai,hermaphrodite,heroin,heshe,heterosexual,hgtv,hickey,history,hitler,hoar,hoare,hoer,home depot,homo,homoerotic,homosexual,honkey,honky,hooker,hookup,hoor,hore,horniest,horny,hot girl,hot video,hotsex,hottie,how to commit genocide,how to commit suicide,how to kill,how to murder,how to torture,hubungan intim,huevon,huge fat,hustler,i hate,ikea,img,impalement,incest,industrial,injun,insertions,intercourse,interracial,interview,invitesweddings,islam,jack off,jackass,jackie strano,jackoff,jack-off,jack-off ,jacobs ladder piercing,jail bait,jailbait,jap,japs,jebanje,jenna jameson,jerk,jerk off,jerk-off,jerk-off ,jesse jane,jesus,jigaboo,jiggaboo,jiggerboo,jisim,jism,jiss,jiz,jiz ,jizm,jizm ,jizz,joanne yiokaris,john holmes,jordan capri,juggs,kama,kamasutra,kanker,kankerkinky,kawk,kelamin,kike,killer,kinbaku,kinkster,kinky,kinsey institute,kiss,kkk,klootzak,knob,knob end,knobbing,knobead,knobed,knobend,knobhead,knobjocky,knobjokey,knobs,knobz,knulle,kock,kondom,kondum,kondums,kontol,kraut,kripalu,ku klux klan,kuksuger,kum,kummer,kumming,kums,kunilingus,kunt,kunts,kuntz,kurac,kurwa,kusi,kyrpa,l3i+ch,l3itch,labia,labial,lagu,lancap,lau xanh,leather straight jacket,lemon party,lemonparty,lensarumah,lesb,lesbi,lesbian,lesbians,lesbo,letto,lezzian,licked,linda lovelace,lindsay lohan,lingerie,lipshits,lipshitz,lirik,list,lmao,lmfao,lolita,lolitas,lovemaking,lovers,lsd,lucah,lust,lusting,lyric,lyrik,m0f0,m0fo,m45terbate,ma5terb8,ma5terbate,mac,madison young,magazine,make me come,making love,malam pengantin,malam pertama,male squirting,mamhoon,manajement,maria ozawa,marijuana,masochism,masochist,masochistic,masokist,massterbait,masstrbait,masstrbate,masterb8,masterbaiter,masterbat,masterbat*,masterbat3,masterbate,master-bate,masterbates,masterbation,masterbations,masturb,masturbat,masturbate,masturbation,mature,mdma,meats,memek,menage a trois,merd,merkin,mesum,mibun,miki sawaguchi,milf,milk,missionary,missionary position,mof0,mofo,mo-fo,money shot,monkleigh,mothaf,mothafuck,mothafucka,mothafuckas,mothafuckaz,mothafucked,mothafucked ,mothafucker,mothafuckers,mothafuckin,mothafucking,mothafucking ,mothafuckings,mothafucks,mother fucker,motherf,motherfisher,motherfuck,motherfucked,motherfucker,motherfuckers,motherfuckin,motherfucking,motherfuckings,motherfuckka,motherfucks,mouliewop,mound of venus,movie,mp3,mr hands,muff,muff diver,muffdiving,muhamad,muhammad,muie,mujeres,mulkku,murder,muschi,music,mutha,muthaf,muthafecker,muthafuckker,muther,mutherfucker,n1gga,n1gger,n1gr,nabi,naked,nambla,nasrani,nastt,naughty,nawashi,nazi,nazis,near,near me,necrophilia,negro,neonazi,nepesaurio,net,netflix,new pornographers,ngecrot,ngentot,ngewe,nicky hilton,nig nog,nigg3r,nigg4h,nigga,niggah,niggas,niggaz,nigger,niggers,niggers ,nigur,niiger,niigr,nimphomania,nina hartley,nipple,nipples,no cd,nob,nob jokey,nobhead,nobjocky,nobjokey,nocd,nonconsent,nsfw images,nude,nudes,nudity,numbnuts,nut butter,nutsack,nympho,nymphomania,nymphomaniac,obama,octopussoir,octopussy,olx,omg,omorashi,one cup two girls,one guy one jar,online,orafis,oral,oral sex,org,orgasim,orgasim ,orgasims,orgasims ,orgasm,orgasms,orgasms ,orgasum,orgies,orgy,oriface,orifice,orifiss,orospu,outercourse,overstock,p0rn,packi,packie,packy,paedophile,paki,pakie,paky,pamela anderson,pansy,panties,panty,paris hilton,paris whitney hilton,paska,pawn,pdf,pecker,pederast,pederasty,pedobear,pedophile,pedophilia,pedophiliac,pee,peeenus,peeenusss,peeing,peenus,peep show,pegging,peinus,pemerkosaan,pen1s,penas,penetration,penetrations,penis,penisfucker,penthouse,penus,penuus,perse,pervert,perverted,perverts,pg ishazamuddin,philip kindred dick,phone sex,phonesex,phuc,phuck,phuk,phuked,phuking,phukked,phukking,phuks,phuq,picka,pickaninny,piece of shit,pierdol,pigfucker,pillu,pimmel,pimpis,pinko,pinterest,piss,piss pig,pissed,pisser,pissers,pisses,pisses ,pissflaps,pissin,pissin ,pissing,pissoff,pissoff ,pisspig,pizda,playboy,pleasure chest,poker,polac,polack,polak,pole smoker,ponyplay,poof,poofter,poonani,poontsee,poop,poop chute,poopchute,porn,porno,pornography,pornos,portfolio,pr0n,pr1c,pr1ck,pr1k,pre teen,precum,present,preteen,price,price list,prices,prick,pricks,pricks ,prince albert piercing,private,product,project,prolapsed,pron,prophet,prostitute,prostituted,prostitutes,prostituting,pthc,pube,pubes,pubic,pula,pule,puppy play,pusse,pussee,pussi,pussies,pussy,pussylips,pussys,pussys ,puta,puto,puuke,puuker,qahbeh,queaf,queef,queer,queers,queerz,quest,quickie,quim,quot,qweef,qweers,qweerz,qweir,r@ygold,racist,raghead,raging boner,rape,raped,rapes,raping,rapist,rapping women,rautenberg,read more,read more about,recktum,rectum,redskin,redtube,related,renob,rent,rentals,retard,reverse cowgirl,rifle,rimjaw,rimjob,rimming,rindu,roman shower,ron jeremy,rosy palm,rosy palm and her 5 sisters,rule 34,russian brides,rusty trombone,s and m,s hit,s&m,s.o.b.,s_h_i_t,sabul,sadie lune,sadism,sadist,sale,sale at,sambo,same sex,santa claus,sasha grey,sausage party,savage love,scank,scat,schaffer,scheiss,schlampe,schlong,schmuck,school,schoolboy,schoolgirl,scissoring,screw,screwing,scroat,scrote,scrotum,seduced,seductive,seks,sell,semen,sempak,senggama,series,servitude,serviture,setubuh,sewa,sex,sexo,sexual reproduction,sexy,sh!+,sh!t,sh1t,shag,shagger,shaggin,shagging,shanna katz,shar rednaur,sharmuta,sharmute,shauna grant,shaved beaver,shaved fish,shaved pussy,shay lauren,shemale,shi+,shibari,shipal,shit,shitdick,shite,shited,shitey,shitfuck,shitfull,shithead,shiting,shitings,shits,shitted,shitter,shitters,shitters ,shitting,shittings,shitty,shitty ,shity,shitz,shiz,shocker,shop,shops,shota,shrimping,shyt,sixtynine,sixty-nine,size queen,sjambok,skanck,skank,skribz,skurwysyn,slanteye,sleazy d,slit,slut,sluts,slutty,smegma,smells like teen spirit,smut,snatch,snowballing,sodomize,sodomy,softcore,software,son-of-a-bitch,spac,spank,spanked,spanking,speculum,sperm,sphencter,spic,spierdalaj,splooge,spooge,spook,spread legs,spunk,spunky teens,spy,squirt,squirted,squirting,stab,step,stickam girl,stileproject,stileproject ,store,stores,stormfront,strap on,strapon,strap-on,strappado,strip club,student,style doggy,submission,submissive,suck,sucked,sucking,suck-off,sucks,suicide,suicide girls,suka,sultry men,sultry women,susie bright,swastika,swinger,syllabus,t1tt1e5,t1tties,taboo 2,tag,tainted love,tanpa busana,taste my,tea bagging,teen,teets,teez,telanjang,tentacle,terrorist,testical,testicle,testicles,tetek,their,theory,thong,threesome,throating,tied up,tight white,tips,tit,titfuck,tits,titt,tittie5,tittiefucker,titties,titty,tittyfuck,tittys,tittywank,titwank,tobacco,togel,toket,toko bagus,tokobagus,tongue in a,topless,tosser,towelhead,traci lords,tranny,transexual,transgender,transsexual,transvestite,tribadism,trisexual,tub girl,tube,tubgirl,tukar istri,tukar pasangan,tumblr,turd,tushy,tw4t,twat,twathead,twats,twatty,twaty,twink,twinkie,two girls,two girls one cup,twunt,twunter,undressing,university,upskirt,urbanshopzone,urethra play,urinated,urinating,urination,urophilia,v14gra,v1gra,va1jina,vag1na,vagiina,vagina,vaginas,vagisil,vaj1na,vajina,vanilla rosebuds,venus mound,viagra,vibrator,video,videos,violet blue,violet ray,violet wand,vittu,vivid,vorarephilia,voyeur,vullva,vulva,w00se,w0p,walmart,wang,wank,wanker,wanking,wanky,warez,wartenberg pinwheel,wartenberg wheel,web,webcam,website,wet dream,wetback,wh00r,wh0re,white power,whoar,wholesale,whore,whores,wichser,wigger,willies,willy,wop,wrapping men,wrapping women,wrinkled starfish,wtf,wtf ,xes,x-girl,xrated,x-rated,xx,xxx,yahudi,yaoi,yellow showers,yiffy,youtube,zabourah,zakar,zoophilia,17 tahun,4share,amp,apps,buy,cache:,cam,clearance,com,coupon,crack,discount,download,hack,jailbreak,magazine,movie,org,pdf,romantic,sale,site:,toto,used,utm_source,youtube, - wikipedia';

        $this->array_badword = explode(',',$this->str_badword);
        $this->google_article = "https://www.google.com/search?q=";
        $this->ask_article = "https://www.ask.com/web?q=";
        $this->bing_article = "https://www.bing.com/search?q=";
        $this->yahoo_article = "https://us.search.yahoo.com/search?p=";
        $this->google_image = "https://www.google.com/search?q=";
        $this->ask_image = "https://www.ask.com/web?q=";
        $this->bing_image = "http://www.bing.com/images/search?q=";
        $this->yahoo_image = "https://images.search.yahoo.com/search/images?p=";

        $this->load->model('mod_cron');
        $this->load->model('mod_user');
        $this->load->model('mod_keyword');
        $this->load->model('mod_post');
        
    }
    
    public function cronjob(){
        $xuid = date("YmdHiS");
        $rand_first_name = rand(1,88799);
        $rand_last_name = rand(1,5163);
        $load_user = $this->mod_user->get_raw_user($rand_first_name,$rand_last_name);
        $user =  $load_user[0]->first_name . " " . $load_user[0]->last_name; 
        $load_recent_keyword = $this->mod_cron->get_recent_keyword();
        $current_keyword_id = $load_recent_keyword[0]->cron_recent_keyword + 1;
        $hasil_cek = false;
        $current_keyword_string = null;
        while($hasil_cek != true){
            $data_where = array("id" => $current_keyword_id);
            $result = $this->mod_keyword->get_keyword_status($data_where);
            if(sizeof($result) > 0){
                if($result[0]->keyword_status == "active"){
                    $hasil_cek = true;
                    $current_keyword_string = $result[0]->keyword;
                }else{
                    $hasil_cek = false;
                    $current_keyword_id++;
                }
            }else{
                $hasil_cek = false;
                $current_keyword_id++;
            }
        } 

        // echo json_encode($this->oxen99($result[0]->keyword),JSON_PRETTY_PRINT);
        $oxen99_result = $this->oxen99($result[0]->keyword);

        // echo $oxen99_result["article"]["google"][5]["judul"] ."<br>";
        // echo $oxen99_result["article"]["google"][5]["konten"] ."<br>";
        $post_title = ucwords($current_keyword_string);
        $post_slug = str_replace(' ','-',strtolower($current_keyword_string."html")); 
        $post_content = "";
        $post_writter = $user;
        $post_status = "publish";
        $post_thumb_image = "";
        $post_datetime = date("Y-m-d H:i:s");
        $keyword_id = $current_keyword_id;

        $cron_recent_keyword = $current_keyword_id;
        $cron_datetime = date("Y-m-d H:i:s");
        $cron_result = 0;

        if(sizeof($oxen99_result["article"]["google"]) > 0 ){
            for($x=0;$x<sizeof($oxen99_result["article"]["google"]);$x++){
                $this->insert_keyword(
                    array(
                        "keyword" => ucwords($oxen99_result["article"]["google"][$x]["judul"]),
                        "keyword_status" => "active"
                    ));
                $post_content .= ucwords($oxen99_result["article"]["google"][$x]["konten"]);
            }

        }

        if(sizeof($oxen99_result["article"]["ask"]) > 0 ){
            for($x=0;$x<sizeof($oxen99_result["article"]["ask"]);$x++){
                $this->insert_keyword(
                    array(
                        "keyword" => ucwords($oxen99_result["article"]["ask"][$x]["judul"]),
                        "keyword_status" => "active"
                    ));
                $post_content .= ucwords($oxen99_result["article"]["ask"][$x]["konten"]);
            }
        }

        if(sizeof($oxen99_result["article"]["bing"]) > 0 ){
            for($x=0;$x<sizeof($oxen99_result["article"]["bing"]);$x++){
                $this->insert_keyword(
                    array(
                        "keyword" => ucwords($oxen99_result["article"]["bing"][$x]["judul"]),
                        "keyword_status" => "active"
                    ));
                $post_content .= ucwords($oxen99_result["article"]["bing"][$x]["konten"]);
            }
        }

        if(sizeof($oxen99_result["article"]["yahoo"]) > 0 ){
            for($x=0;$x<sizeof($oxen99_result["article"]["yahoo"]);$x++){
                $this->insert_keyword(
                    array(
                        "keyword" => ucwords($oxen99_result["article"]["yahoo"][$x]["judul"]),
                        "keyword_status" => "active"
                    ));
                $post_content .= ucwords($oxen99_result["article"]["yahoo"][$x]["konten"]);
            }
        }

        echo $post_content;


        if(sizeof($oxen99_result["image"]["google_image"]) > 0 ){

        }

        if(sizeof($oxen99_result["image"]["bing_image"]) > 0 ){

        }

        if(sizeof($oxen99_result["image"]["yahoo_image"]) > 0 ){

        }

    }

	public function index(){
		echo $this->random_agent();
	}

	public function oxen99($raw_query_string){
        $clean_query_string = $this->clear_from_badword($raw_query_string);
        $hasil_google = $this->grabbing_google_article($clean_query_string);
        $hasil_ask = $this->grabbing_ask_article($clean_query_string);
        $hasil_bing = $this->grabbing_bing_article($clean_query_string);
        $hasil_yahoo = $this->grabbing_yahoo_article($clean_query_string);
        
        $response_article = array(
            "google" => $hasil_google,
            "ask" => $hasil_ask,
            "bing" => $hasil_bing,
            "yahoo" => $hasil_yahoo,
        );
        $hasil_google_image = $this->grabbing_google_image($clean_query_string);
        $hasil_bing_image = $this->grabbing_bing_image($clean_query_string);
        $hasil_yahoo_image = $this->grabbing_yahoo_image($clean_query_string);
            
        $response_image = array(
            "google_image" => $hasil_google_image,
            "yahoo_image" => $hasil_yahoo_image,
            "bing_image" => $hasil_bing_image
        );

        $response = array(
            "article" => $response_article,
            "image" => $response_image,
        );
        return $response;
    }

	function random_agent(){ 
		$random_jenis = rand( 0 , sizeof($this->array_browser) - 1 );
		$x = 0;
		foreach($this->array_browser as $key => $value) {
			$selected_browser = $key;
			if ($x == $random_jenis) break;
			$x++;
		}
		$random_agent = rand(0, sizeof($this->array_browser[$selected_browser]) -1 );
		return $this->array_browser[$selected_browser][$random_agent];
	}

	function clear_from_badword($raw_query_string){
        $clean_query_string = str_replace($this->array_badword,'',$raw_query_string);
		return $clean_query_string;
	}

    function clear_escape_character($raw_string){
        $raw_string = trim($raw_string);
        $arr_cari = array("<br>","<b>","</b>","<em>","</em>","<strong>","</strong>",'<span cl="r">','<span cl="f">','<span cl="news_dt">',"</span>" ," -");
        $raw_string = str_replace($arr_cari," ",$raw_string);
        
        $arr_cari = array("|");
        $raw_string = str_replace($arr_cari,"",$raw_string);
        

        $raw_string = preg_replace( '/<(span).*?class="\s*(?:.*\s)?f(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '', $raw_string );
        $raw_string = preg_replace('/(\d+) (\w+) (\d+)/i', '', $raw_string);
        $raw_string = preg_replace('/(\w+) (\d+), (\d+)/i', '', $raw_string);
        
        $raw_string = preg_replace('/(\d+) (\w+) (\d+)/i', '', $raw_string);
        $raw_string = preg_replace('/(\w+) (\d+), (\d+)/i', '', $raw_string);
        
        $raw_string = preg_replace('/[0-9]+/', '', $raw_string);

        //--------------$raw_string = wp_specialchars_decode(strip_tags($raw_string));
        
        // 1) convert á ô => a o
        $raw_string = preg_replace("/[áàâãªä]/u","a",$raw_string);
        $raw_string = preg_replace("/[ÁÀÂÃÄ]/u","A",$raw_string);
        $raw_string = preg_replace("/[ÍÌÎÏ]/u","I",$raw_string);
        $raw_string = preg_replace("/[íìîï]/u","i",$raw_string);
        $raw_string = preg_replace("/[éèêë]/u","e",$raw_string);
        $raw_string = preg_replace("/[ÉÈÊË]/u","E",$raw_string);
        $raw_string = preg_replace("/[óòôõºö]/u","o",$raw_string);
        $raw_string = preg_replace("/[ÓÒÔÕÖ]/u","O",$raw_string);
        $raw_string = preg_replace("/[úùûü]/u","u",$raw_string);
        $raw_string = preg_replace("/[ÚÙÛÜ]/u","U",$raw_string);
        $raw_string = preg_replace("/[’‘‹›‚]/u","'",$raw_string);
        $raw_string = preg_replace("/[“”«»„]/u",'"',$raw_string);
        $raw_string = str_replace("–","-",$raw_string);
        $raw_string = str_replace(" "," ",$raw_string);
        $raw_string = str_replace("ç","c",$raw_string);
        $raw_string = str_replace("Ç","C",$raw_string);
        $raw_string = str_replace("ñ","n",$raw_string);
        $raw_string = str_replace("Ñ","N",$raw_string);
    
        //2) Translation CP1252. &ndash; => -
        $trans = get_html_translation_table(HTML_ENTITIES); 
        $trans[chr(130)] = '&sbquo;';    // Single Low-9 Quotation Mark 
        $trans[chr(131)] = '&fnof;';    // Latin Small Letter F With Hook 
        $trans[chr(132)] = '&bdquo;';    // Double Low-9 Quotation Mark 
        $trans[chr(133)] = '&hellip;';    // Horizontal Ellipsis 
        $trans[chr(134)] = '&dagger;';    // Dagger 
        $trans[chr(135)] = '&Dagger;';    // Double Dagger 
        $trans[chr(136)] = '&circ;';    // Modifier Letter Circumflex Accent 
        $trans[chr(137)] = '&permil;';    // Per Mille Sign 
        $trans[chr(138)] = '&Scaron;';    // Latin Capital Letter S With Caron 
        $trans[chr(139)] = '&lsaquo;';    // Single Left-Pointing Angle Quotation Mark 
        $trans[chr(140)] = '&OElig;';    // Latin Capital Ligature OE 
        $trans[chr(145)] = '&lsquo;';    // Left Single Quotation Mark 
        $trans[chr(146)] = '&rsquo;';    // Right Single Quotation Mark 
        $trans[chr(147)] = '&ldquo;';    // Left Double Quotation Mark 
        $trans[chr(148)] = '&rdquo;';    // Right Double Quotation Mark 
        $trans[chr(149)] = '&bull;';    // Bullet 
        $trans[chr(150)] = '&ndash;';    // En Dash 
        $trans[chr(151)] = '&mdash;';    // Em Dash 
        $trans[chr(152)] = '&tilde;';    // Small Tilde 
        $trans[chr(153)] = '&trade;';    // Trade Mark Sign 
        $trans[chr(154)] = '&scaron;';    // Latin Small Letter S With Caron 
        $trans[chr(155)] = '&rsaquo;';    // Single Right-Pointing Angle Quotation Mark 
        $trans[chr(156)] = '&oelig;';    // Latin Small Ligature OE 
        $trans[chr(159)] = '&Yuml;';    // Latin Capital Letter Y With Diaeresis 
        $trans['euro'] = '&euro;';    // euro currency symbol 
        ksort($trans); 
        
        foreach ($trans as $k => $v) {
            $raw_string = str_replace($v, $k, $raw_string);
        }
        
        // 5) remove Windows-1252 symbols like "TradeMark", "Euro"...
        $raw_string = preg_replace('/[^(\x20-\x7F)]*/','', $raw_string); 
        $raw_string = str_replace('#39;', '\'', $raw_string);
        $targets=array('\r\n','\n','\r','\t');
        $results=array(" "," "," ","");
        $raw_string =str_replace($targets,$results,$raw_string);
        $remove_this = array(' ....',' ...',' ..', '....','...','..', '.... ','... ','.. ','Read more', 'Show less', '%', ')', '&','-. -', '(', '/', '#',';','-',':','+');
        $clean_string = str_replace($remove_this, ' ', $raw_string);
        return trim($clean_string);
    }

	function do_curl($url){
		if($url != null){
			$user_agent = $this->random_agent();
            $curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, $url);
			$header[0] = "Accept: text/xml,application/xml,application/xhtml+xml,";
			$header[0] .= "text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5";
			$header[] = "Cache-Control: max-age=0";
			$header[] = "Connection: keep-alive";
			$header[] = "Keep-Alive: 30000";
			$header[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
			$header[] = "Accept-Language: en-us,en;q=0.5";
			$header[] = "Pragma: ";
			curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_TIMEOUT, 45);
			curl_setopt($curl, CURLOPT_FRESH_CONNECT, TRUE);
			curl_setopt($curl, CURLOPT_USERAGENT, $user_agent);
			$output = curl_exec($curl);
			curl_close($curl);
			return $output;
		}else{
			return null;
		}
	}

    // --------------------------- GRABBING ARTIKEL DAR 4 SE TERKEMUK---------------------------------
	function grabbing_google_article($clean_query_string){
        $param = str_replace(' ','+',$clean_query_string);
		$url = $this->google_article . $param;
		$hasil_curl = $this->do_curl($url);
        $html = new simple_html_dom();
        $html->load($hasil_curl);
		if($html && is_object($html)){
            $result = array();
			foreach($html->find('div.g') as $g){
                $item['judul'] = isset($g->find('h3.r a', 0)->innertext) ? $g->find('h3.r a', 0)->innertext : '';
                $item['konten'] = isset($g->find('span.st', 0)->innertext) ? $g->find('span.st', 0)->innertext : '';
                $item['judul'] = $this->clear_from_badword($item['judul']);
                $item['konten'] = $this->clear_from_badword($item['konten']);
                $item['judul'] = trim(preg_replace('/\s+/',' ', $this->clear_escape_character($item['judul'])));
                $item['konten'] = trim(preg_replace('/\s+/',' ', $this->clear_escape_character($item['konten'])));
                if($item['judul'] != "" && $item['konten'] != "")
				$result[] =  $item;
			}
			$html->clear();
			unset($html);
            if($result != null){
                return $result;
            }else{
                $result = array(
                    "judul" => "",
                    "konten" => ""
                );
                return array($result);
            }
		}else{
			$result = array(
                "judul" => "",
                "konten" => ""
            );
            return array($result);
        }
    }
    
    function grabbing_ask_article($clean_query_string){
        $param = str_replace(' ','+',$clean_query_string);
        $url = $this->ask_article . $param;
        $hasil_curl = $this->do_curl($url);
		$html = new simple_html_dom();
        $html->load($hasil_curl);
		if($html && is_object($html)){
            $result = array();
			foreach($html->find('div.PartialSearchResults-item') as $g){
				$item['judul'] = isset($g->find('div.PartialSearchResults-item-title a', 0)->innertext) ? $g->find('div.PartialSearchResults-item-title a', 0)->innertext : '';
                $item['konten'] = isset($g->find('p.PartialSearchResults-item-abstract', 0)->innertext) ? $g->find('p.PartialSearchResults-item-abstract', 0)->innertext : '';
                $item['judul'] = $this->clear_from_badword($item['judul']);
                $item['konten'] = $this->clear_from_badword($item['konten']);
                $item['judul'] = trim(preg_replace('/\s+/',' ', $this->clear_escape_character($item['judul'])));
                $item['konten'] = trim(preg_replace('/\s+/',' ', $this->clear_escape_character($item['konten'])));
                if($item['judul'] != "" && $item['konten'] != "")
				$result[] =  $item;
			}
			$html->clear();
			unset($html);
            if($result != null){
                return $result;
            }else{
                $result = array(
                    "judul" => "",
                    "konten" => ""
                );
                return array($result);
            }
		}else{
			$result = array(
                "judul" => "",
                "konten" => ""
            );
            return array($result);
        }
    }
    
    function grabbing_bing_article($clean_query_string){
        $param = str_replace(' ','+',$clean_query_string);
        $url = $this->bing_article . $param;
        $hasil_curl = $this->do_curl($url);
		$html = new simple_html_dom();
        $html->load($hasil_curl);
		if($html && is_object($html)){
            $result = array();
			foreach($html->find('li.b_algo') as $g){
				$item['judul'] = isset($g->find('h2 a', 0)->innertext) ? $g->find('h2 a', 0)->innertext : '';
				$item['konten'] = isset($g->find('p', 0)->innertext) ? $g->find('p', 0)->innertext : '';
                $item['judul'] = $this->clear_from_badword($item['judul']);
                $item['konten'] = $this->clear_from_badword($item['konten']);
                $item['judul'] = trim(preg_replace('/\s+/',' ', $this->clear_escape_character($item['judul'])));
                $item['konten'] = trim(preg_replace('/\s+/',' ', $this->clear_escape_character($item['konten'])));
                if($item['judul'] != "" && $item['konten'] != "")
				$result[] =  $item;
			}
			$html->clear();
			unset($html);
            if($result != null){
                return $result;
            }else{
                $result = array(
                    "judul" => "",
                    "konten" => ""
                );
                return array($result);
            }
		}else{
			$result = array(
                "judul" => "",
                "konten" => ""
            );
            return array($result);
        }
    }
    
    function grabbing_yahoo_article($clean_query_string){
        $param = str_replace(' ','+',$clean_query_string);
        $url = $this->yahoo_article . $param;
        $hasil_curl = $this->do_curl($url);
		$html = new simple_html_dom();
        $html->load($hasil_curl);
		if($html && is_object($html)){
            $result = array();
			foreach($html->find('div#web li') as $g){
				$item['judul'] = isset($g->find('h3.title a', 0)->innertext) ? $g->find('h3.title a', 0)->innertext : '';
				$item['konten'] = isset($g->find('p', 0)->innertext) ? $g->find('p', 0)->innertext : '';
                $item['judul'] = $this->clear_from_badword($item['judul']);
                $item['konten'] = $this->clear_from_badword($item['konten']);
                $item['judul'] = trim(preg_replace('/\s+/',' ', $this->clear_escape_character($item['judul'])));
                $item['konten'] = trim(preg_replace('/\s+/',' ', $this->clear_escape_character($item['konten'])));
                if($item['judul'] != "" && $item['konten'] != "")
				$result[] =  $item;
			}
			$html->clear();
			unset($html);
            if($result != null){
                return $result;
            }else{
                $result = array(
                    "judul" => "",
                    "konten" => ""
                );
                return array($result);
            }
		}else{
			$result = array(
                "judul" => "",
                "konten" => ""
            );
            return array($result);
        }
    }
    // --------------------------- END OF GRABBING ARTIKEL DARI 4 SE TERKEMUK-----------------------------

    

    // --------------------------- GRABBING GAMBAR DARI 4 SE TERKEMUK---------------------------------
    function grabbing_google_image($clean_query_string){
        $param = str_replace(' ','+',$clean_query_string);
        $url = $this->google_image . $param . "&tbs=sur:f&newwindow=1&tbm=isch";
        $hasil_curl = $this->do_curl($url);
        $html = new simple_html_dom();
        $html->load($hasil_curl);
        $result = array();
		if( $html && is_object($html) ){
            $x ;
            foreach($html->find('div[class="rg_meta notranslate"] ') as $gm){
                $gm = strip_tags($gm);
                $data = json_decode($gm, true);
			    $item['link'] = $data['ru'];
				$item['imgsrc'] = $data['ou'];
                $item['title'] = $this->clear_escape_character($data['s']);
				$result[] =  $item;
            }
            return $result;
        }else{
			$result = array(
                "link" => "",
                "imgsrc" => "",
                "title" => ""            );
            return array($result);
        }
    }


    function grabbing_bing_image($clean_query_string){
        $param = str_replace(' ','+',$clean_query_string);
        $url = $this->bing_image . $param . "&qft=+filterui:license-L2_L3_L4_L5_L6_L7";
        $hasil_curl = $this->do_curl($url);
        $html = new simple_html_dom();
        $html->load($hasil_curl);
        $result = array();
		if( $html && is_object($html) ){
            $x ;
            foreach($html->find('div[class="dg_b"] div[class="imgpt"]') as $gm){
                $get_m_attr = $gm->find('a.iusc', 0)->m;
				$get_m_attr =  stripslashes ( html_entity_decode( $get_m_attr ) ) ;
				$get_json_m = json_decode( $get_m_attr,true );
			    $item['link'] = $get_json_m['purl'];
				$item['imgsrc'] = $get_json_m['murl'];
                $item['title'] = $this->clear_escape_character($gm->find('img', 0)->alt);
				$result[] =  $item;
            }
            return $result;
        }else{
			$result = array(
                "link" => "",
                "imgsrc" => "",
                "title" => ""            );
            return array($result);
        }
    }
    
    function grabbing_yahoo_image($clean_query_string){
        $param = str_replace(' ','+',$clean_query_string);
        $url = $this->yahoo_image . $param . "&imgl=fsu";
        $hasil_curl = $this->do_curl($url);
        $html = new simple_html_dom();
        $html->load($hasil_curl);
        $result = array();
        if( $html && is_object($html) ){
            $x ;
            foreach($html->find('ul[id="sres"] li') as $gm){
                $get_m_attr = $gm->find('a', 0)->href;
                parse_str( $get_m_attr , $output );
                $imgurl     = isset( $output['imgurl'] ) ? $output['imgurl'] : '';
                $title     = isset( $output['tt'] ) ? $output['tt'] : '';
                
                $item['imgsrc'] = stripslashes(html_entity_decode($imgurl));
                $item['title'] = $this->clear_escape_character($title);
                $result[] =  $item;
            }
            return $result;
        }else{
            $result = array(
                "link" => "",
                "imgsrc" => "",
                "title" => ""            );
            return array($result);
        }
    }
    // --------------------------- END OF GRABBING GAMBAR DARI 4 SE TERKEMUK------------------------------

    function insert_keyword($data){
        $this->mod_keyword->insert_keyword($data);
    }

    function insert_article($data){
        $this->mod_post->insert_article($data);
    }

    function insert_image($data){
        $this->mod_post->insert_image($data);
    }

    function insert_cron($data){
        $this->mod_cron->insert_cron($data);
    }
}
