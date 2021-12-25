<?php

//wap in php to show case sensitive constants

define('gravity',10);         //lower case
define('GRAVITY',20);         //upper case
define('Gravity','qwerty');   //Capitalise
define('GrAVitY',9876); //mixed

echo gravity;
echo PHP_EOL;
echo GRAVITY;
echo PHP_EOL;
echo Gravity;
echo PHP_EOL;
echo GrAVitY;

?>