<?php

//wap in php to show here doc string syntax

$a=100;

echo <<<BLOCK
This is a Here Doc String, $a \n
	"This is again New Line of string "$a" "
'This string is inside $a single quotes \t tabbed' = $a

BLOCK;

?>