<?php

#Qns 5
function oldestRichest($array){
    #Write your code here
    $oldest_age = 0;
    $biggest_salary = 0;
    foreach($array as $single_entry){
        if ($single_entry["age"] > $oldest_age){
            $oldest_age = $single_entry["age"];
        }

        if ($single_entry["Salary"] > $biggest_salary){
            $biggest_salary = $single_entry["Salary"];
        }
    }

    foreach($array as $person) {
        if ($person["age"] == $oldest_age && $person["Salary"] == $biggest_salary){
            echo $person["name"]." ";
        }
    }
    
}

$array = [["name" => "Adam", "age" => 23, "Salary" => 200 ] ,
    ["name" => "Ben", "age" => 41, "Salary" => 105 ] ,
    ["name" => "Collin", "age" => 10, "Salary" => 78 ] ,
    ["name" => "Darren", "age" => 78, "Salary" => 2000 ] ,
    ["name" => "Eric", "age" => 78, "Salary" => 288 ] ,
    ["name" => "Farquar", "age" => 78, "Salary" => 2000]];

oldestRichest($array);
