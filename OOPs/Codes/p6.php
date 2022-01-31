<?php

//wap in php to show Variables and methods in PHP.

class Test{

var $a=10;
var $b=20;

function add(){

$a=100;
$b=200;

//$test = new Test;

echo 'This is a add Function'.PHP_EOL;
echo $this->a + $this->b;

echo PHP_EOL;

var_dump($this);

}

}

$test = new Test();
$test->add();

var_dump($test);


