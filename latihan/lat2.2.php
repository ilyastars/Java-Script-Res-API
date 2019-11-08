<?php
function centuryFromYear($year) {

if ($year % 100 == 0) 
		return round ($year / 100); 
	else 
		return round (($year / 100) + 1);	 
} 

?>