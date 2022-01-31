<?php

//wap in php to find odd and even

$output='Odd';
$x=readline("Enter the number: ");

if($x%2==0)
{
	$output = 'Even';
}
echo $output;