<?php

function fibonacci($y){

    $first=0;
    $secend=1;
    $count=0;

    while($count < $y)
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
        if($febo>100)
        {
            break;
        }
        else 
        {
            echo "$febo ";
        }
        $count++;
        
    }
}

fibonacci(10);

?>