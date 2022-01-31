<?php

//wap in php to show priority of local and global scope of variable

$a=10;

echo "The value of a x at global scope is : $a";

echo PHP_EOL;

function qwe(){
$b=20;
global $a;
echo "The value of global as at local scope is : $a";
echo PHP_EOL;
echo "The value of local b at local scope is : $b";
echo PHP_EOL;

$a=123;
echo "The value of local a at local scope is : $a";
}
qwe();

echo PHP_EOL;
echo "The value of of x at global scope is : $a";

?>