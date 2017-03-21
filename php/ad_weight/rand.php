<?php
$count_a = $count_b = $count_c = $count_d = $count_e = $count_total = 0;
$run_times = 100000;
for($i=0;$i<=$run_times;$i++) {
    $randNum = mt_rand(1,5);
    switch($randNum) {
        case 1:
            $count_a ++;
            $count_total ++;
            break;
        case 2:
            $count_b++;
            $count_total ++;
            break;
        case 3:
            $count_c++;
            $count_total ++;
            break;
        case 4:
            $count_d++;
            $count_total ++;
            break;
        case 5:
            $count_e++;
            $count_total ++;
            break;
        }
}
echo "程序执行".$run_times."次\n";
echo "A出现".$count_a."次，占比".sprintf('%.4f',$count_a/$count_total*100)."%\n";
echo "B出现".$count_b."次，占比".sprintf('%.4f',$count_b/$count_total*100)."%\n";
echo "C出现".$count_c."次，占比".sprintf('%.4f',$count_c/$count_total*100)."%\n";
echo "D出现".$count_d."次，占比".sprintf('%.4f',$count_d/$count_total*100)."%\n";
echo "E出现".$count_e."次，占比".sprintf('%.4f',$count_e/$count_total*100)."%\n";

