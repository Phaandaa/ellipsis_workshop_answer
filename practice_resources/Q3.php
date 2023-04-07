<?php

function isPalindrome($string)
{
    $lower_string = strtolower($string);
    #Write your code here
    $reversed_string = "";
    for ($i = strlen($string) - 1; $i >= 0; $i--){
        $reversed_string .= $lower_string[$i];
    }

    if ($lower_string == $reversed_string){
        echo "Palindrome! <br>";
    } else {
        echo "Not a palindrome!";
    }






    
}

isPalindrome("madam");
isPalindrome("Ellipsis");

