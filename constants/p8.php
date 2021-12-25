<?php

//wap in php to show constants are global inside class

define('animal','Tiger');
printf("The king of jungle is : %s \n",animal);

$ani2='Loin';
printf("Tiger can only be replaced by : %s\n",$ani2);

class Test{

private $g; //instance variable
private $G; //instance variable

public function __construct(){   //constructor

	$this->g = $ani2;
	$this->G = animal;

	printf("The King of Jungle is : %s \n",animal);
	printf("Tiger can only be replaced by : %s \n",$ani2);

	printf("The main king of jungle is : %s \n",$this->G);
	printf("The second king of jungle is : %s \n",$this->g);

}

}

$test=new test();


?>