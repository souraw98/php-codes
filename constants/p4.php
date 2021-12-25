<?php 

//wap in php to show re-declaration error in constants

define('gravity',10);
echo gravity;

echo PHP_EOL;

define('GRAVITY',9.8);
echo GRAVITY;



echo PHP_EOL;

define('TRUE','yes');
echo TRUE;

echo PHP_EOL;

printf("The Value of predefined constant true : %d \n",TRUE);
define('TRUE','yes');
printf("The Value of predefined constant true : %d \n",TRUE);

printf("The Value of user-defined constant gravity : %d \n",gravity);
define('gravity',9.8);
printf("The Value of user-defined constant gravity : %d \n",gravity);