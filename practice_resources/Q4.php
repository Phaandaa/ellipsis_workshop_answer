<?php

#Qns 4
function oldest($assoc){
    #Write your code here
    $temp_largest = 0;
    foreach($assoc as $key=>$value){
        if ($value > $temp_largest){
            $temp_largest = $value;
        }
    }

    foreach($assoc as $key=>$value){
        if($value == $temp_largest){
            echo $key." ";
        }
    }

}

$assoc = ["Adam" => 23, "Ben" => 42, "Colin" => 10, "Darren" => 78, "Eric" => 78, "George" => 66];
oldest($assoc);