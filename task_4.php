<?php

function fibonacci($y){

    $first=0;
    $secend=1;

    for($count=0; $count < $y; $count++)
    {
        if ($count <= 1)
        {
            $febo=$count;
        }
        else
        {
            $febo=$first+$secend;
            $first=$secend;
            $secend=$febo;
        }
        echo "$febo ";  
    }
}

fibonacci(15);

?>