<?php

//wap in php to show var-to-vsr reference

$x=10;   //normal variable
echo $x; //normal variable

echo PHP_EOL;

$y='ravi';
echo $y;

echo PHP_EOL;

$ravi=50;
echo $ravi;

echo PHP_EOL;

$z='qwerty';
$$z=500;  //$($z)=500
printf("The Value of qwerty is = %s",$qwerty);

echo PHP_EOL;

$exp='x';
echo $exp;
echo PHP_EOL;
echo getType($exp);
echo PHP_EOL;
echo $$exp;

echo PHP_EOL;

$student['name']='saurav';
$student['class']='CSE';

foreach($student as $key => $value){

	$$key=$value;
	printf("%s : %s \n",$key,$value);	
}

echo $name;
echo PHP_EOL;
echo $class;

echo PHP_EOL;

$car['name']='Mahindra';
$car['class']='XUV700';
$car['price']='20 lakhs';

printf("name of car is : %s \n",$car['name']);
printf("Class of car is : %s \n",$car['class']);
printf("Price of car is : %s \n",$car['price']);



extract($car);

printf("name of car is : %s \n",$name);
printf("Class of car is : %s \n",$class);
printf("Price of car is : %s \n",$price);


