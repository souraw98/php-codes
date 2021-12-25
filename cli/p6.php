<?php

// $no1 = readline('Enter no. 1: ');
// $no2 = readline('Enter mo. 2: ');

// echo add($no1,$no2);
// echo add();

// function add()
// {
//     $no1 = readline('Enter no. 1: ');
//     $no2 = readline('Enter mo. 2: ');
//     return $no1+$no2;
// }

$no1 = readline('Enter no. 1: ');
$no2 = readline('Enter mo. 2: ');

function add1($no1=0,$no2=0)
{
    return $no1+$no2;
}

printf("Sum with 0 Argument is: %d\n",add1());
printf("Sum with 1 Argument is: %d\n",add1($no1));
printf("Sum with 2 argument is: %d\n",add1($no1,$no2));

?>