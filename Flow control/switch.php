<?php

//wap in php to show odd even using switch

$x=readline("Enter a Number: ");

switch($x%2)
{

case 0:
	echo "$x is even";
break;

case 1:
	echo "$x is odd";
break;

}

?>