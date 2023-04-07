<?php

#Qns 4
function oldest($assoc){
    #sort associative

    #method1
    #arsort($assoc);
    #$largest = array_values($assoc)[0];

    #method2
    $temp_largest = 0;
    foreach ($assoc as $key=>$value){
        if ($value > $temp_largest){
            $temp_largest = $value;
        }
    }
    foreach ($assoc as $key=>$value){
        if ($value == $temp_largest){
            echo $key . " ";
        }
    }
    
}

$assoc = ["Adam" => 23, "Ben" => 42, "Colin" => 10, "Darren" => 78, "Eric" => 78, "George" => 66];
oldest($assoc);