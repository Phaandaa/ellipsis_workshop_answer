<?php
function printTriangle($row)
{
    #Write your code here
    $result = "";
    for ($i = 0; $i <= $row; $i++){
        for ($j = 0; $j <= $i; $j++){
            $result .= "*";
        }
        $result .= "<br>";
    }
    echo $result;







    
}

printTriangle(5);
printTriangle(7);

?>
