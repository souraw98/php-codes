<?php

//wap in php to show, no return type of constructor

class Abs{

public function __construct($a){

echo "Constructor called automatic";
echo PHP_EOL;
return $a+10;

}

}

$abs = new Abs(20);

//echo $abs;   //Implicitaly Called and cannot be returned.

$x=$abs->__construct(20);    //Explicitly called as method can be returned.
echo $x;