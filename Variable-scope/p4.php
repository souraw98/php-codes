<?php

//wap in php to show global scope defined from local scope

$a=10;
echo "The value of a from global : $a";
echo PHP_EOL;

function test(){

global $a;
global $b;
$b=123;
echo "The value of a from global inside test : $a";
echo PHP_EOL;
echo "The value of b from local inside test : $b";
echo PHP_EOL;

}
test();

echo "The value of b from global scope outside : $b";
echo PHP_EOL;
$b=875;

function test1(){


global $a;
global $b;
echo "The value of a from global inside test1 : $a";
echo PHP_EOL;
echo "The value of b from local inside test1 : $b";

}
test1();