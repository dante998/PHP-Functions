<?php
$arr = array(120,1200,12000);
for ($i = 0; $i < count($arr); $i++) {
  $arr[$i] = strrev($arr[$i]);
}

echo array_sum($arr);
