<?php

//wap in php to show consonents and vowels

$x=readline("Enter a Alphabet: ");
(getType($x=="string") and ctype_alpha($x) and strlen($x)==1)?:exit('Invalid Value Supplied');

$output='';

switch(strtolower($x))
{

case 'a':
	$output='vowel';
break;

case 'e':
	$output='vowel';
break;

case 'i':
	$output='vowel';
break;

case 'o':
	$output='vowel';
break;

case 'u':
	$output='vowel';
break;

default:
	$output='consonent';
break;

}

echo $output;