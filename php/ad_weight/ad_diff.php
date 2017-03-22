<?php
$iLoopNum = 1;
$aAdList = array(
    //'100001',
    '100002',
    //'100003',
    //'100004',
    //'100005',
    //'100006',
);
function getLoopAd($aAdList, $loop) {
    $num = count($aAdList);
    if($num < $loop) {
        $iDivisionNum = intval(floor(($loop-$num)/2));
        $iDivisionNum = $iDivisionNum > 0 ? $iDivisionNum : 1;
        $iBaseNum = $num + $iDivisionNum;
    } else {
        $iBaseNum = $num;
    }
    $randNum = mt_rand(1,$iBaseNum);
    return $randNum;
}
function getDiff($aAdList, $iLoopNum,$lastAd)
{
    $iAd = getLoopAd($aAdList, $iLoopNum);
    if($iAd == $lastAd) {
        $newAd = getDiff($aAdList, $iLoopNum, $iAd);
    } else {
        $newAd = $iAd;
    }
    return $newAd;
}

$count1 = $count2 = $count3 = $count4 = $count5 = $count6 = $emptyNum = 0;
$lastNum = 0;
$run_times = 10000;
for($i=0;$i<=$run_times;$i++) {
    $iAd = getDiff($aAdList,$iLoopNum,$lastNum);
    //echo $iAd."\n";
    $lastNum = $iAd;
    $iAd = isset($aAdList[$iAd-1]) ? $aAdList[$iAd-1]  : 0;
    switch($iAd) {
    case 100001:
        $count1 ++;
        break;
    case 100002:
        $count2 ++;
        break;
    case 100003:
        $count3 ++;
        break;
    case 100004:
        $count4 ++;
        break;
    case 100005:
        $count5 ++;
        break;
    case 100006:
        $count6 ++;
        break;
    default :
        $emptyNum ++;
        break;
    }
}

echo "程序执行".$run_times."次\n";
echo "广告100001命中{$count1}次，占比".$count1/$run_times."\n";
echo "广告100002命中{$count2}次，占比".$count2/$run_times."\n";
echo "广告100003命中{$count3}次，占比".$count3/$run_times."\n";
echo "广告100004命中{$count4}次，占比".$count4/$run_times."\n";
echo "广告100005命中{$count5}次，占比".$count5/$run_times."\n";
echo "广告100006命中{$count6}次，占比".$count6/$run_times;
