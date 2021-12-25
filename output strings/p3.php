<?php

//wap in php to show raw strings

echo 'This is a simple Raw String';

echo PHP_EOL;

echo "This is a simple processed String";

echo PHP_EOL;

//escape sequence
echo 'This is a \t tabbed \n line';
echo PHP_EOL;
echo "This is a \t tabbed \n line";

//with variable 
$name='ravi';
$class='Btech';
$rollno=1001;

echo PHP_EOL;
echo 'name = $name , class = $class, rollno = $rollno, inside single quotes';
echo PHP_EOL;
echo "name = $name , class = $class, rollno = $rollno, inside double quotes";

?>