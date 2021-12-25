<?php

//wap in php to show, floating points numbers

$x=010;
echo$x;
echo PHP_EOL;

// $a=08; //invalid numeric literal
//(conversion to octal range not possible)
// echo $a;

$b=10.5;
echo $b;
echo PHP_EOL;
echo getType($b);
echo PHP_EOL;
var_dump($b);

echo PHP_EOL;

$w=.5;

//eg:
$k='a';
$k.=$w;
echo $k;
echo PHP_EOL;
echo getType($k);

echo PHP_EOL;

$marks=9.999999999999999;
echo $marks;
echo PHP_EOL;
echo getType($marks);
echo PHP_EOL;
var_dump($marks);


echo PHP_EOL;
$m=9.999999;
echo $m;
echo PHP_EOL;
echo getType($m);

echo PHP_EOL;

printf("%.2f",$m);