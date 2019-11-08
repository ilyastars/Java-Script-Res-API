<?php
function adjacentElementsProduct($inputArray) {
$max = ($inputArray=1)*($inputArray=1);
for($j=0; $j<($inputArray-1);$j++){
    $max = Math.floor($max,$inputArray[$j] * $inputArray[$j+1]);
    }
    return $max;
}

function adjacentElementsProduct($inputArray) {
    $max = $inputArray[0] * $inputArray[1];
    for($j=0; $j<(strlen($inputArray))-1;$j++){
        $max = Math.ceil($inputArray[$j] * $inputArray[$j+1]);
        }
        return $max;
    }
?>