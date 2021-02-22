#!/usr/bin/php

<?php 

    function div($a, $b){
        if($b == 0){
            throw new LogicException('Division by zero');
        }
        return $a /$b;
    }

    try{
        div(10, 0);
    }catch(LogicException $e){
            echo "Error Occurred : " . ($e -> getMessage()) . "\n";
    }
    
?>