<?php
//var_dump($_POST);
$Id = $_POST['qqId'];
//$str = '你好，你好';

//var_dump($str);
$url = 'http://r.qzone.qq.com/cgi-bin/user/cgi_personal_card?uin='.$Id;
$qqget = file_get_contents('http://r.qzone.qq.com/cgi-bin/user/cgi_personal_card?uin='.$Id);  /* 获取JSON数据 */
$json = mb_substr(trim($qqget),10,-2,"utf-8");  /* 截取指定内容 */
echo $json;
//$array = json_decode($json,true);  /* 转换成PHP变量  */

//$qq			=	$array['uin'];
//$nick		=	$array['nickname'];
//$urlImg		=	'http://q4.qlogo.cn/g?b=qq&nk='.$qq.'&s=100';


function curl_get($url){
    $host = parse_url($url);
    $site = $host['scheme']."://".$host['host'];
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30); // 30秒超时
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); // 禁用验证
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); // 返回原网页
    curl_setopt($ch, CURLOPT_REFERER, $site); // 伪造来源
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)'); // 伪造User-Agent
    curl_setopt($ch, CURLOPT_HTTPHEADER , array('X-FORWARDED-FOR:1.2.4.8', 'X-FORWARDED-HOST:'.$host['host'], 'X-FORWARDED-SERVER:'.$host['host'])); // 伪造HTTP头
    $response =  curl_exec($ch);
    curl_close($ch);
    return $response;
}
