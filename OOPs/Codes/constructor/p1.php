<?php

//wap in php to show, no return type of constructor

class Abs{

public function __construct(){

echo "Constructor called automatic";
echo PHP_EOL;
return 10;

}

}

$abs = new Abs();
$abs = new Abs;

//echo $abs;   //Implicitaly Called and cannot be returned.

$x=$abs->__construct();    //Explicitly called as method can be returned.
echo $x;