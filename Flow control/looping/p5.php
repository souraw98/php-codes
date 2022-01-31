<?php

//wap in php to show reverse number

$x=readline("Enter Number: ");
$count = strlen($x);
$sum = 0;

while($x!=0)
{

$q = $x/10;
$rem = $x%10;
$ef = $rem * (pow(10,$count-1));
$sum = $sum+$ef;
$x=$q;
$count--;


}
echo $sum;

