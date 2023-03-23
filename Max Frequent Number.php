<?php
$input = array(4,1,1,3,2,3,3,4,1,2,9,3,3);

$count = array_count_values($input);

$output = array();
$maxElement = 0;

for($i=0;$i<count($input);$i++) {
  $count = 0;
  for ($j = 0; $j < count($input); $j++) {
    if ($input[$i] == $input[$j]) {
      $count++;
    }
  }
  if($count>$maxElement){
    $maxElement = $count;
    $a = $input[$i];
  }
}

echo $a.' -> '.$maxElement;
echo PHP_EOL;

echo "The number $a is the most frequent (occurs $maxElement times)";