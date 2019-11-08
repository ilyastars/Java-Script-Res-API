<?php
function makeArrayConsecutive2($statues) {

$minVal = min($statues);
$maxVal = max($statues);
$newArray = [];
$loopLen = $maxVal - $minVal;


for($i = 0; $i <= $loopLen; $i++) {
    $newArray[$i] = $minVal; 
    $minVal++;        
}
$result = array_intersect($statues,$newArray);
$sResult = sizeof($result);
$newArrLen = sizeof($newArray);
$fresult = $newArrLen - $sResult;
return $fresult;

}
?>