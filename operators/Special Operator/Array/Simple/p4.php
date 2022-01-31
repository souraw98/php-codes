<?php

//wap in php to + operation in array with duplicate subscript

$x=[10,20,30,40];

$y=[100,200,300,400];

echo 'The count of x '.count($x);
echo PHP_EOL;
echo 'The count of y '.count($y);
echo PHP_EOL;
var_dump(count($x) == count($y));
print_r($x+$y);
print_r($y+$x);

var_dump(($x+$y) == ($y+$x)); //equal
var_dump(($x+$y) != ($y+$x)); //unequal

var_dump(($x+$y) == ($x)); 
var_dump(($x+$y) === ($x)); 

var_dump(($y+$x) == ($y)); 
var_dump(($y+$x) == ($y)); 

var_dump(($x+$y) !== ($y+$x)); //unequal


?>