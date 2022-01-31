<?php

//wap in php to show sort and rsort in Associative Array Values

$a = ['10'=>'a','100'=>'c','5'=>'b'];

print_r($a);

ksort($a);
print_r($a);

krsort($a);
print_r($a);
