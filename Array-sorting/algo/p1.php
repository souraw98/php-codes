<?php

//wap in php to sort

$a = [10];   //count greater than 1

$a = [10,20];  //count==2 Already Sorted ascending or descending

$a = [10,30,50,20,65,23,44,87,1];

for($i=0; $i<count($a); $i++)
{

	for($j=$i+1; $j<count($a); $j++)
	{

		if($a[$i]>$a[$j])
		{
		
			$temp = $a[$j];
			$a[$j] = $a[$i];
			$a[$i] = $temp;

		}	

	}

}
print_r($a);