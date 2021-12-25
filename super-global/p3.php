<?php

//wap in php to find sum and average
	print_r($argv);

	$sum=0;
	$arg=0;
	for($i=1; $i<$argc; $i++)
	{
		$sum = $sum+(int)$argv[$i];
		
	}
	echo $sum;
	echo PHP_EOL;
	$arg = $sum/($argc-1);
	echo $arg;

?>