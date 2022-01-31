<?php

//wap in php to show local and global scope of variables

$a=10;

echo "The value of a x at global scope is : $a";

echo PHP_EOL;

function qwe(){
$b=20;
global $a;   //get the variable from heap

echo "The value of global as at local scope is : $a";
echo PHP_EOL;
echo "The value of local b at local scope is : $b";
}
qwe();

echo PHP_EOL;
echo "The value of of x at global scope is : $a";

?>