<?php

//wap in php to show string concatenation

$x = 'life ';
$y = 'partner';

var_dump(gettype($x));
var_dump(gettype($y));

echo $x.$y;

var_dump(gettype($x.$y));

$x=10;
$y=20;
var_dump($x.$y);
var_dump(gettype($x.$y));


$result = 'The sum is = ';
echo $result.($x+$y);

//Note : PHP Allows Mathematical
//Evaluation, only after using brackets
//Otherwise non-numeric Encountered
//Error will be thrown

?>
