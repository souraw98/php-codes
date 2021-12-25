<?php


//wap in php to show nullable datatype

$x=null; //it does not exist at all
echo $x;
echo PHP_EOL;
echo getType($x);
echo PHP_EOL;
var_dump(is_null($x));
echo PHP_EOL;
var_dump(is_null($x));
var_dump(empty($x));
var_dump($x==null);
var_dump($x===null);
var_dump(''==null);
var_dump(''===null);

echo PHP_EOL;

echo 'very very Important';

echo PHP_EOL;

$y='';
var_dump($y);
