<?php

//wap in php to find the quadrants according to given, quadrant condition

$x=readline('ENter The x value: ');
$y=readline('Enter the y value: ');

if($x>0 and $y>0)
	echo '1st Quadrant';
else if($x>0 and $y<0)
	echo '4th Quadrant';
else if($x<0 and $y>0)
	echo '2nd Quadrant';
else
	echo '3rd Quadrant';