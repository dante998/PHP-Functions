<?php

$firstArray = ['hi', 'php', 'java', 'xml', 'csharp', 'sql', 'html', 'css', 'js'];
$secondArray = ['nakov', 'java', 'sql', 'html', 'css', 'js'];

$firstArrayLength = count($firstArray);
$secondArrayLength = count($secondArray);

$leftCounter = 0;
$rightCounter = 0;

$shorterArray = min($firstArrayLength, $secondArrayLength);

for($i = 0; $i < $shorterArray; $i++) {
  if ($firstArray[$i] == $secondArray[$i]) {
    $leftCounter++;
  }
}


$firstArray = array_reverse($firstArray);
$secondArray = array_reverse($secondArray);

for($i = 0; $i < $shorterArray; $i++) {
  if ($firstArray[$i] == $secondArray[$i]) {
    $rightCounter++;
  }
}

if ($leftCounter > $rightCounter) {
  echo "Left Counter: " . $leftCounter.PHP_EOL;
} else if ($leftCounter < $rightCounter) {
  echo "Right Counter: " .  $rightCounter.PHP_EOL;
} else {
  echo "0";
}

echo "The Largest common end is at right : sql,html,css,js";