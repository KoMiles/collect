<?php
/*
**effect:生成一级、二级、三级url链接
**date:2014-07-02 9:40 by komiles
**
**
**
**
**
**
**
**
**
*/
$catArr = file('cat.txt');
$topNum = 0;
$secondNum = 0;
$thirdNum = 0;
$totalNum = 0;
$pinyinCatIdArr = array();
ob_start();
foreach($catArr as $value){
	$value = iconv('gb2312','utf-8',$value);
	$value = preg_replace('/\s+/','',$value);
	$catArr1 = explode(',',$value);
	$pinyinCatIdArr[$catArr1[0]]=$catArr1[2];
}
foreach($catArr as $value){
	$value = iconv('gb2312','utf-8',$value);
	$value = preg_replace('/\s+/','',$value);
	$catArr1 = explode(',',$value);
	//生成一级分类url地址
	if($catArr1[3]==1){
		//echo "一级分类 url http://www.kongfz.cn/".$catArr1[0]."\n";
		echo "一级分类 ".$catArr1[1]." http://www.kongfz.cn/".$pinyinCatIdArr[$catArr1[0]]."/\n";
		$topNum++;
	}
	
	//生成二级分类url地址
	if($catArr1[3]==2){
		if(strlen($catArr1[0])==16){
		$topCat = substr($catArr1[0],0,2)."00000000000000";
		}else{
		$topCat = substr($catArr1[0],0,2)."000000000000000";
		}
		//echo "二级分类 url http://www.kongfz.cn/".$topCat."/".$catArr1[0]."\n";
		echo "    二级分类 ".$catArr1[1]." http://www.kongfz.cn/".$pinyinCatIdArr[$topCat]."/".$pinyinCatIdArr[$catArr1[0]]."/\n";
		$secondNum++;
	}
	
	//生成三级分类url地址
	if($catArr1[3]==3){
		if(strlen($catArr1[0])==16){
		$topCat = substr($catArr1[0],0,2)."00000000000000";
		$secondCat = substr($catArr1[0],0,5)."00000000000";
		}else{
		$topCat = substr($catArr1[0],0,2)."000000000000000";
                $secondCat = substr($catArr1[0],0,5)."000000000000";
		}
		//echo "三级分类 url http://www.kongfz.cn/".$topCat."/".$secondCat."/".$catArr1[0]."\n";
		echo "        三级分类 ".$catArr1[1]." http://www.kongfz.cn/".$pinyinCatIdArr[$topCat]."/".$pinyinCatIdArr[$secondCat]."-".$pinyinCatIdArr[$catArr1[0]]."/\n";
		$thirdNum++;
	}
	$totalNum++;
}
echo "\n统计如下\n";
echo "一级分类一共：".$topNum."个\n";
echo "二级分类一共：".$secondNum."个\n";
echo "三级分类一共：".$thirdNum."个\n";
echo "所有分类一共：".$totalNum."个\n";
$result = ob_get_contents();
file_put_contents('newCatUrl.txt',$result);
?>
