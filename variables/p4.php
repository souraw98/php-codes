<?php

//wap in php to show false

$x=false;
echo (int)$x; //nothing
echo PHP_EOL;
echo getType($x); //boolean
echo PHP_EOL;
var_dump($x); //bool(false)
echo PHP_EOL;
echo json_encode($x);  //raw format

echo PHP_EOL;
echo "on comparing the values:-";
echo PHP_EOL;

echo (false==FALSE);
echo PHP_EOL;
echo (FaLse==false);
echo PHP_EOL;
var_dump(0==false); //Implicit type conversion //PHP dynamic
echo PHP_EOL;
var_dump(0===false);

echo PHP_EOL;

$x="1111111111111111";
printf("%s",$x);