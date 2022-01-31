<?php


function str($name='',$x=0)
{

    if($x==0)
    {
        return $name;
    }

    $h='';
    for($i=0;$i<$x;$i++)
    {
        $h.=$name;
      }

    return $h;

}

$a = readline('ENter a string: ');
$n = readline('How many Times: ');
echo str($a,$n);

?>