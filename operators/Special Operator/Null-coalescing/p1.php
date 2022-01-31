<?php

//Spress Operator @ or Notice Operator : Error Operator
//never use @ operator because, Debugging is important.

$x=20;
echo "The Value of x : $x";

echo PHP_EOL;
echo "The value of y :".@$y;

$z=10;
$z=isset($z)?$z:null;
echo PHP_EOL;
echo "The value of z using ternary : ".$z; //undefined varibale z
var_dump($z);
$z=isset($z)??null;
echo PHP_EOL;
echo "the va;ue of z using NullCoalescing is: ".$z;
var_dump($z);

$p = (5>2)??null;
echo PHP_EOL;
var_dump($p);

?>