<?php

//wap in php to + operation in array with duplicate subscript

$x=[10,20,30,'ravi'];

$y[4]='Doremon';
$y[5]=100;
$y[6]=200;
$y[7]=700;

echo 'The count of x '.count($x);
echo PHP_EOL;
echo 'The count of y '.count($y);
echo PHP_EOL;
var_dump(count($x) == count($y));
print_r($x+$y);
print_r($y+$x);

var_dump(($x+$y) == ($y+$x)); //equal
var_dump(($x+$y) === ($y+$x)); //equal not Identical
var_dump(($x+$y) === ($x+$y)); //equal and Identical
var_dump(($y+$x) === ($y+$x)); //equal and Identical

?>