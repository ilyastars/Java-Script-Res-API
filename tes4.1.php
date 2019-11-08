<?php
// Inline: $v is value to be divided, $m is the modulus
$remainder = ( $v % $m + $m ) % $m;

// Or as a function:
function modulo( $value, $modulus ){
  return ( $value % $modulus + $modulus ) % $modulus;
}

// Test:
for( $x = -6; $x <= 6; ++$x )  echo $x, "\t", modulo( $x, 3 ), "\t<br>\n";
/* prints:
-6  0
-5  1
-4  2
-3  0
-2  1
-1  2
0  0
1  1
2  2
3  0
*/ 
?>