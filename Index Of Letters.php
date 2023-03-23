<?php
function conv($alph = NULL): bool|int|string {
  return (!is_null($alph) ? strpos("abcdefghijklmnopqrstuvwxyz", $alph) : "Need String");
}

$str = "softuni";
$out = "";
for ($i = 0; $i < strlen($str); $i++) {
  $out .= conv(strtolower($str[$i]));
}
echo $str . " - " . $out;