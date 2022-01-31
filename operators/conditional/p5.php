<?php

//perfect number

//the number whose sum of factor = number itself
//eg:-   ++

$a=("Enter the number : ");
sum = 0;
for($i=1; $i<$a; $i++)
{
	if($a%$i==0)
	{
		$sum = $sum + $i;
	}

}

if($sum == $a)
{
	echo "No is Perfect";
}
else
{
	echo "No is not perfect";
}