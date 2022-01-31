<?php

//wap in php to show, a normal object

class Test{

var $a=10;
var $b=10;
var $c=10;

}

$test = new Test();  //Instantiation
var_dump($test);
$test = Test(); //Assignment
var_dump($test);
$test = 10;  //Assignment
var_dump($test);

function Test(){

	return "Hello everyOne";

}