<?php

//wap in php to show odd even default case in using switch

$x=readline("Enter a Number: ");

switch($x%2)
{

case 0:
	echo "$x is even";
break;

default:
	echo "$x is odd";
break;

}

?>