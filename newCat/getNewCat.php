<?php
/*
**effect:把一个文件的内容转化为二维数组
**date:2014-07-01 by komiles
**knowledge point
**1,得到一个文件：file
**2,把空格替换掉：preg_replace
**3,转化编码：iconv
**4,分割字符串：explode
**5,打开输出缓冲区：ob_start
**6,得到缓冲区的内容：file_get_contents
**
*/


$re = file('cat.txt');
foreach($re as $key =>$value)
{
	$value = preg_replace('/[\s+]/','',$value);
	$re[$key] = iconv('gbk','utf-8',$value);
}
$newArr = array();
foreach($re as $key=>$value){
	$arr = explode(',',$value);
	$newArr[$arr[0]] = array('id'=>$arr[0],'name'=>"'$arr[1]'",'pinyin'=>"'$arr[2]'",'level'=>$arr[3],'hasLeaf'=>$arr[4],'tpl'=>$arr[5]);
}
ob_start();
print_r($newArr);
$result = ob_get_contents();
file_put_contents('newCat.txt',$result);
?>
