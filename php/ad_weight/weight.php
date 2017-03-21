<?php

$arr = array(
    array(
        'name' => 'A',
        'weight' => 1,
        'rand' => array(
            'min' => 0,
            'max' => 1,
        ),
    ),
    array(
        'name' => 'B',
        'weight' => 2,
        'rand' => array(
            'min' => 1,
            'max' => 3,
        ),
    ),
    array(
        'name' => 'C',
        'weight' => 3,
        'rand' => array(
            'min' => 3,
            'max' => 6,
        ),
    ),
    array(
        'name' => 'D',
        'weight' => 4,
        'rand' => array(
            'min' => 6,
            'max' => 10,
        ),
    )
);

$name = 'count_';
$count_total = 0;
$run_times = 1000000;

$count_a = $count_b = $count_c = $count_d = $count_e = $count_total = 0;
for($i=0;$i<=$run_times;$i++) {
    $randNum = mt_rand(0,10);
    foreach($arr as $row) {
        if($randNum >=$row['rand']['min'] && $randNum < $row['rand']['max']) {
            switch($row['name']) {
            case 'A':
                $count_a ++;
                $count_total ++;
                break;
            case 'B':
                $count_b++;
                $count_total ++;
                break;
            case 'C':
                $count_c++;
                $count_total ++;
                break;
            case 'D':
                $count_d++;
                $count_total ++;
                break;
            }
        }
    }
}

echo "程序执行".$run_times."次\n";
echo "A出现".$count_a."次，占比".sprintf('%.4f',$count_a/$count_total*100)."%\n";
echo "B出现".$count_b."次，占比".sprintf('%.4f',$count_b/$count_total*100)."%\n";
echo "C出现".$count_c."次，占比".sprintf('%.4f',$count_c/$count_total*100)."%\n";
echo "D出现".$count_d."次，占比".sprintf('%.4f',$count_d/$count_total*100)."%\n";
