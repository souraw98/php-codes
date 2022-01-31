<?php

//wap in php to show reverse number

$x=readline("Enter Number: ");
$count = readline("Enter The count: ");
$sum = 0;

for(;;)
{

$q = $x/10;
$rem = $x%10;
$ef = $rem * (pow(10,$count-1));
$sum = $sum+$ef;
$x=$q;
$count--;

if($x==0)
{
	break;
}
}
echo $sum;

