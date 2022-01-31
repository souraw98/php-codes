<?php

//wap in php to show core php file

echo 'This line is from core PHP file';
echo PHP_EOL;

function test(){

echo 'This is function from core php file';
echo PHP_EOL;

}
test();

class tests{

public function display(){

echo 'This id diplay object method from core php file';

}

}

$tests = new tests();
$tests->display();