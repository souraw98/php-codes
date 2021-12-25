<?php

error_reporting(E_NOTICE);

//wap in php to show, difference b/w predefined error level and user-defined error level.

printf("The Value of true is : %d \n",true);
printf("The Value of TRUE is : %d \n",TRUE);

printf("true is Incase Sensitive constant : %d \n",(TRUE==1));

define('true',10,1);
printf("The Value of true after re-declaration : %d \n",true);

?>