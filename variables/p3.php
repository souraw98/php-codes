<?php

//wap in php to show boolean data types stored in variables

$x=true; //non case sensitive...
echo $x;
echo PHP_EOL;

echo getType($x);  //boolean

echo PHP_EOL;

var_dump($x);

echo PHP_EOL;


$z=TRUE;
echo $z;
echo PHP_EOL;

echo getType($z);

echo PHP_EOL;

var_dump($z);

echo PHP_EOL;

$y=TrUe;
echo $y;
echo PHP_EOL;

echo getType($y);

echo PHP_EOL;

var_dump($y);

echo PHP_EOL;

echo "on comparing all three values";
echo PHP_EOL;
echo (true==TRUE);
echo PHP_EOL;
echo (True==TRUE);
echo PHP_EOL;
echo (1==true);
echo PHP_EOL;
var_dump(1===true);


















