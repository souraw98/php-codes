<?php

//wap in php to show, Instance Variables and Instance

class Test{

var $a=10;
var $b=20;
var $c=30;

}

$x=10;

$test = new Test();
var_dump($test);  //Instance

var_dump($test instanceOf Test); //instanceOf Operator is used to check if the given object is Instance or Test or not
var_dump($x instanceOf Test);