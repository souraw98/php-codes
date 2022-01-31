<?php

//ctype_alnum

$x= "ASD10";
var_dump(ctype_alnum($x));

$y= 'SAURAV';
var_dump(ctype_alpha($y));

$a = 1234;
var_dump(ctype_cntrl($a));

$b="asd";
var_dump(ctype_digit($b));

$c= "\n\r   ";
var_dump(ctype_graph($c));