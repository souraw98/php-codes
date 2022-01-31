<?php

//wap in php to show consonents and vowels

$x=readline("Enter a Alphabet: ");
(getType($x=="string") and ctype_alpha($x) and strlen($x)==1)?:exit('Invalid Value Supplied');

$output='';

switch($x)
{

case 'a':
case 'A':
	$output='vowel';
break;

case 'e':
case 'E':
	$output='vowel';
break;

case 'i':
case 'I':
	$output='vowel';
break;

case 'o':
case 'O':
	$output='vowel';
break;

case 'u':
case 'U':
	$output='vowel';
break;

default:
	$output='consonent';
break;

}

echo $output;