<?php

$inputArr = array('2','1','1','2','3','3','2','2','2','1');
$inputArrCount = count($inputArr);
$counter = 0;
$element = '';
for ($i = 0; $i < $inputArrCount; $i++) {

  $currentElement = $inputArr[$i];
  $localCounter = 1;
  for ($n = $i + 1 ; $n < $inputArrCount; $n++) {
    if ($inputArr[$n] == $currentElement)  {
      $localCounter++;
    } else {
      break;
    }
    $i = $n;
  }
  if ($localCounter > $counter) {
    $counter = $localCounter;
    $element = $currentElement;

  }
}
echo implode(" ",array_fill(0,$counter,$element));