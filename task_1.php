<?php

function forLoop($start,$end)
{
    for ($x=$start; $x<=$end; $x++)
    {
        if ($x%2==0)
        {
            echo "$x ";
        }
    }
}

function doWhileLoop($start,$end)
{
    do {
        if ($start%2==0)
        {
            echo "$start ";
        }
    } while ($start <= $end);
}

function whileLoop($start,$end)
{
    
    while ($start<=$end)
    {
        if ($start%2==0)
        {
            echo "$start ";
        }
        $start++;
    }
}


forLoop(1,20);
echo "<br/><br/>";
whileLoop(1,20);
echo "<br/><br/>";
doWhileLoop(1,20);

?>