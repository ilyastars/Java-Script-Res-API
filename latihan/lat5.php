<?php

function shapeArea($n) {
  $area = 1;
  while ($n > 1) {
    $area += ($n-- - 1) * 4;
  }
  return $area;
}


?>