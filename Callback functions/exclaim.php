<?php

function exclaim($str): string {
  return $str . "! ";
}

function ask($str): string {
  return $str . "? ";
}

function printFormatted($str, $format) {
  echo $format($str);
}

// Pass "exclaim" and "ask" as callback functions to printFormatted()
printFormatted("Hello world", "exclaim");
printFormatted("How are you", "ask");
