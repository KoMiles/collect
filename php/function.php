<?php

/**
 * getNumberToMyriad-
 * 功能 万进制转换
 * @param mixed $number-
 * @param mixed $len 小数点后的位数
 * @access public
 * @return void
 */
public static function getNumberToMyriad($number, $len = 1) {
    if($number >= 10000 && $number <= 9990000) {
        $number = $number/10000;
        $t = pow(10,$len);
        return (intval($number * $t)/$t)."万";
    } else if ($number > 9990000) {
        return  "999万+";
    } else {
        return $number;
    }

}
