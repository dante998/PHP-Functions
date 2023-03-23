<?php
$numbers = array(10, 5, 5, 99, 3, 4, 2, 5, 1, 1, 4);
$index = null;

for($i = 0, $size = count($numbers); $i < $size; $i++) {
  $left_array = array_slice($numbers, 0, $i);
  $right_array = array_slice($numbers, $i + 1, $size);

  if (empty($left_array)) {
    array_push($left_array, 0);
  }

  if (empty($right_array)) {
    array_push($right_array, 0);
  }

  if (array_sum($left_array) == array_sum($right_array)) {
    $index = $i;
    break;
  }
}

echo is_int($index) ? $index : "no";