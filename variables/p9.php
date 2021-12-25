<?php

//wap in php to show the difference between NULL and undefined;

$x='a';
echo $x;
echo PHP_EOL;
var_dump($x);
var_dump(isset($x));
echo PHP_EOL;
$x='a';
echo $x;
echo PHP_EOL;
var_dump($x);
var_dump(isset($x));

printf("size is: %z bytes",$x);