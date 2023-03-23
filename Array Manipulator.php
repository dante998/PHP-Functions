<?php
$array_one = array(1,2,4,5,6,7);


$pos = 1;
$val = 8;
$array_one = addValToPos($array_one, $val, $pos);


$val = 1;
$res = -1;
for($i = 0; $i < count($array_one); $i++) {
  if ($array_one[$i] == $val) {$res = $i; break;}
}
echo $res;


$val = -3;
$res = -1;
for($i = 0; $i < count($array_one); $i++) {
  if ($array_one[$i] == $val) {$res = $i; break;}
}
echo $res;


echo "[";
for ($i = 0; $i < count($array_one ); $i++){
  echo $array_one[$i] . " ";
}
echo "]";
echo "<br>";
$array_two = array(1,2,3,4,5);


$pos = 5;
$newEelements = array (9,8,7,6,5);
for ($i = 0; $i < count($newEelements); $i ++){
  $array_two = addValToPos($array_two, $newEelements[$i], $pos);
  $pos++;
}


$val = 15;
$res = -1;
for($i = 0; $i < count($array_two); $i++) {
  if ($array_two[$i] == $val) {$res = $i; break;}
}
echo $res;


$pos = 3;
unset($array_two[$pos]);


$shift = 1;
for ($i = 0; $i < $shift; $i++){
  array_push($array_two, array_shift($array_two));
}


echo "[";
for ($i = 0; $i < count($array_two); $i++){
  echo $array_two[$i] . " ";
}
echo "]";
echo "<br>";
$array_three = array(2,2,4,2,4);



$pos = 1;
$val = 4;
$array_three = addValToPos($array_three, $val, $pos);


$newArr = [];
for ($i = 0; $i < count($array_three)/2; $i++){
  $newArr[$i] = $array_three[$i] + $array_three[$i + 1];
}
$array_three = $newArr;


echo "[";
for ($i = 0; $i < count($array_three); $i++){
  echo $array_three[$i] . " ";
}
echo "]";
echo "<br>";
$array_four = array(1,2,1,2,1,2,1,2,1,2,1,2);


$newArr = [];
for ($i = 0; $i < count($array_four)/2; $i++){
  $newArr[$i] = $array_four[$i] + $array_four[$i + 1];
}
$array_four = $newArr;


$newArr = [];
for ($i = 0; $i < count($array_four)/2; $i++){
  $newArr[$i] = $array_four[$i] + $array_four[$i + 1];
}
$array_four = $newArr;


$pos = 0;
$newEelements = array (-1, -2, -3);
for ($i = 0; $i < count($newEelements); $i ++){
  $array_four = addValToPos($array_four, $newEelements[$i], $pos);
  $pos++;
}


echo "[";
for ($i = 0; $i < count($array_four); $i++){
  echo $array_four[$i] . " ";
}
echo "]";

function addValToPos($arr, $val, $pos) {
  return array_merge(array_slice($arr, 0, $pos), array($val), array_slice($arr, $pos));
}
echo "<br>";