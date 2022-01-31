<?php

//wap in php to show has relatioship

class A{

public function ktm_bike(){

	echo "This is a KTM Bike...".PHP_EOL;

}

}

class B extends A{

public function cycle(){

	echo "THis is a cycle...".PHP_EOL;

}

}

$a=new A;
$a->ktm_bike();

$b=new B;
$b->cycle();
$b->ktm_bike();

