<?php

//wap in php to show super global variables

$a=20;
$b=30;

print_r($GLOBALS);

function qwe(){

echo "The value of a from global : {$GLOBALS['a']}";
echo PHP_EOL;
echo "The value of b from global : {$GLOBALS['b']}";
echo PHP_EOL;

global $a,$b;

echo "The value of a from gloabl : $a";
echo PHP_EOL;
echo "The value of b from global : $a";

}
qwe();