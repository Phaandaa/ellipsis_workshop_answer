<?php

// DO NOT EDIT THIS FUNCTION
function getMonthName($month_num) {
    $names = [ 'JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'];

    if( $month_num > 0 && $month_num < 13 ) {
       return $names[$month_num - 1];
    }
 }

function luckStringToDict($luck_str){


    return $luck_str;
}

$str1 = 'NORMALx2, GOODx2, BADx2, NORMALx3, BAD';
$str2 = 'NORMALx2, GOOD';

var_dump(luckStringToDict($str1));
var_dump(luckStringToDict($str2));
