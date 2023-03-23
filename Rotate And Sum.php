<?php

$arrays = 2;
$rotatedArrays = array(array(3, 2, 4, -1));
$length = count($rotatedArrays[0]);
echo "New arrays: " ;
for ($i = 1; $i < $arrays+1; $i++) {
  $rotatedArrays[$i][0] = $rotatedArrays[$i-1][$length-1];
  echo ''. $rotatedArrays[$i][0] .' ';
  for ($j = 0; $j <= $length-2; $j++) {
    $rotatedArrays[$i][$j+1] = $rotatedArrays[$i-1][$j];
    echo ''. $rotatedArrays[$i][$j+1] .' ';
  }

}
$sum = array();
for ($i = 0; $i < $length; $i++) {
  $sum[$i] = 0;
  for ($j = 0+1; $j < $arrays+1; $j++) {
    $sum[$i] = $sum[$i] + $rotatedArrays[$j][$i];
  }

  echo PHP_EOL .'sum[' . $i . '] = ' . $sum[$i] . ' ' ;

}
