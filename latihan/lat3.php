<?php
function checkPalindrome($inputString) {
    $len = strlen($inputString);  
    for($i =0; $i<$len/2; $i++){
        if($inputString [$i] != $inputString [$len - $i - 1] ){
            return false;
         }else{
            return true;
        }
    }
}

?>