<?php
// DO NOT EDIT THIS FUNCTION
function getMonthName($month_num) {
    $names = [ 'JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'];

    if( $month_num > 0 && $month_num < 13 ) {
       return $names[$month_num - 1];
    }
 }


function luckStringToDict( $luck_str ) {
    // YOUR CODE GOES HERE
 
    $arr = explode(",", $luck_str);
 
    //var_dump($arr);
 
    $resultArr = [];
 
    $month_number = 0;
    $luck = ''; // e.g. 'GOOD', 'BAD', 'NORMAL'
 
    foreach($arr as $token) { // $token, e.g. 'NORMALx2', 'BAD', 'GOODx3'
 
       $token = trim($token); // Remove whitespace(s) around
 
       $parts = explode("x", $token);
 
       //var_dump($parts);
 
       if( count($parts) == 1 ) { // $token, e.g. 'GOOD', 'BAD'... without x2, x3...
          $parts[1] = 1;
       }
 
       $luck = $parts[0];        // e.g. 'GOOD'
       $num_months = $parts[1];  // e.g. 3
 
       for($i = 0; $i < $num_months; $i++) {
          $month_number++;
          $month_name = getMonthName($month_number);
 
          if( array_key_exists($luck, $resultArr) ) {
             $luckArr = $resultArr[$luck];
             $luckArr[] = $month_name;
             $resultArr[$luck] = $luckArr;
          }
          else {
             $resultArr[$luck] = [$month_name];
          }
       }
    }
 
    // Check if all 12 months are covered
    // If not, add the remaining month(s).
    if( $month_number < 12 ) {
 
       $month_number++;
 
       for($i = $month_number; $i <= 12; $i++) {
          $month_name = getMonthName($month_number); // e.g. NOV, DEC
 
          // Update existing array for $luck inside $resultArr
          // by adding this $month_name
          $luckArr = $resultArr[$luck];
          $luckArr[] = $month_name;
          $resultArr[$luck] = $luckArr;
 
          $month_number++;
       }
    }
 
    return $resultArr;
 
    /* 
       If you don't know how to do this function, 
       use the following line of code so that you can continue with the subsequent parts.
       Otherwise, you can comment it out. 
    */
    //return [ 'GODD' => [ 'JAN'], 'NORMAL' => [ 'FEB'], 'BAD' => [ 'MAR'],  ];
}

$str1 = 'NORMALx2, GOODx2, BADx2, NORMALx3, BAD';
$str2 = 'NORMALx2, GOOD';

var_dump(luckStringToDict($str1));
var_dump(luckStringToDict($str2));

?>