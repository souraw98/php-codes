<?php

//wap in php to find perfect Number using recursion and ternary operator
$n=readline("Enter a number: ");

if(is_perfect($n))
{
    echo "$n is perfect number.";
}
else
{
    echo "$n is not a perfect number";
}

function is_perfect($n,$i=1,$sum=0)
{
    if($i==$n)
    {
        return false;
    }
    else
    {
        if($n%$i==0)
        {
            $sum = $sum + $i;
        }
        if($sum == $n)
        {
            return true;
        }
        return is_perfect($n,$i+1,$sum);
    }
}

?>