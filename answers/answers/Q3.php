<?php

function isPalindrome($string)
{
    $lower_string = strtolower($string);
    // $reversestr = strrev(($string));

    #Alternative way to reverse a string
    $reverse_str = "";
    for ($i = strlen($lower_string)-1; $i >= 0; $i--) {
        $reverse_str .= $lower_string[$i];
    }

    if ($reverse_str == $string) {
        echo "Palindrome! <br>";
    } else {
        echo "Not a Palindrome! <br>";
    }
}

isPalindrome("madam");
isPalindrome("Ellipsis");

