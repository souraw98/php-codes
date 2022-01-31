<?php

//wap in php to show reverse number

$x=readline("Enter Number: ");
$count = strlen($x);
$sum = 0;

for($x=$x;$x!=0;$count--)
{

$q = $x/10;
$rem = $x%10;
$ef = $rem * (pow(10,$count-1));
$sum = $sum+$ef;
$x=$q;


}
echo $sum;

