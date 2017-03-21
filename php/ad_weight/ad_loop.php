<?php
$iLoopNum = 6;
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
    $res  =  floor(($loop-$num)/2);
    var_dump($res,$loop);
exit;
    $iBaseNum = $num+intval(floor(($loop-$num)/2));
    $randNum = mt_rand(1,$iBaseNum);
    return isset($aAdList[$randNum-1]) ? $aAdList[$randNum-1] : $randNum;
}
$iArrNum = count($aAdList);

$count1 = $count2 = $count3 = $count4 = $count5 = $count6 = $emptyNum = 0;
$run_times = 100;
for($i=0;$i<=$run_times;$i++) {
    $iAd = getLoopAd($aAdList, $iLoopNum);
    echo $iAd."\n";
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
echo "100001命中{$count1}次，占比".$count1/$run_times."\n";
echo "100002命中{$count2}次，占比".$count2/$run_times."\n";
echo "100003命中{$count3}次，占比".$count3/$run_times."\n";
echo "100004命中{$count4}次，占比".$count4/$run_times."\n";
echo "100005命中{$count5}次，占比".$count5/$run_times."\n";
echo "100006命中{$count6}次，占比".$count6/$run_times;
