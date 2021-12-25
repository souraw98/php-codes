<?php

//wap in php too show difference b/w raw and processed in the combination.

//escape character sequence
#echo ''''; //invalid
#ehco """"; //invalid

echo 'The line is \n single tabbed and "\t double" tabbed';
echo PHP_EOL;
echo "The line is \n single tabbed and '\t double' tabbed";
echo PHP_EOL;

//with variable
$a=100;
echo 'The value of $a is : "$a" ';
echo PHP_EOL;
echo "The value of $a is : '$a' ";
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo 'The value of $a is : '.$a;
echo PHP_EOL;
echo 'The value of $a is : "'.$a.'"';
echo PHP_EOL;
echo 'The value of $a is : '."'$a'";

echo PHP_EOL;
#echo "Hello Everyone'qwerty "asdfgh"'";

?>