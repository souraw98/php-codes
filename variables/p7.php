<?php

//wap in php to show nullable and empty

$x='';
var_dump($x);
echo PHP_EOL;
var_dump($x=='');
echo PHP_EOL;
var_dump($x=="");
echo PHP_EOL;
var_dump($x==="");
echo PHP_EOL;
var_dump($x==='');
echo PHP_EOL;
var_dump(empty($x));
echo PHP_EOL;
var_dump(empty(''));
echo PHP_EOL;
var_dump(empty(""));

