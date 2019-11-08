<?php
function allLongestStrings(array $inputArray) {
    $cnt = count($inputArray);
    $output = [];
    $max = $inputArray[0];
    for ($i = 0; $i < $cnt;  ++$i) {
        $len = strlen($inputArray[$i]);
        if ($len > $max) $max = $len;

        if (!isset($output[$len])) 
            $output[$len] = [];

        $output[$len][] = $inputArray[$i];
    }    

    return $output[$max]; 
}
?>