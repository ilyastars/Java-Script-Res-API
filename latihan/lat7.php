<?php

function almostIncreasingSequence($sequence) {
    $foundOne = false;

    for ($i = -1, $j = 0, $k = 1; $k < count($sequence); $k++)
    {
        $deleteCurrent = false;
        if ($sequence[$j] >= $sequence[$k])
        {
            if ($foundOne)
            {
                return false;
            }
            $foundOne = true;
            if ($k > 1 && $sequence[$i] >= $sequence[$k])
            {
                $deleteCurrent = true;
            }
        }
        if (!$foundOne)
        {
            $i = $j;
        }
        if (!$deleteCurrent)
        {
            $j = $k;
        }
    }
    return true;
}

var_dump(almostIncreasingSequence([1,3,2]));//true
var_dump(almostIncreasingSequence([1,3,2,1]));//false
var_dump(almostIncreasingSequence([2,1,2,3]));//true

var_dump(almostIncreasingSequence([1,2,3]));
var_dump(almostIncreasingSequence([1,2,3,0]));
var_dump(almostIncreasingSequence([9,1,2,3,0]));
var_dump(almostIncreasingSequence([1,2,9,3,4]));
var_dump(almostIncreasingSequence([1,2,9,0,3,4]));
var_dump(almostIncreasingSequence([1,2,8,9,3,4]));
?>