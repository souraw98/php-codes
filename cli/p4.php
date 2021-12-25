<?php

$fp=fopen('my.txt','r');

$txt=fgets($fp,1024);

echo $txt;

?>