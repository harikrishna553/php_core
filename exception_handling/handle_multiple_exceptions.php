#!/usr/bin/php

<?php 

    function div($a, $b){
        if(!is_int($a) || !is_int($b)){
            throw new RuntimeException("This operation supported only for integers");
        }
        
        if($b == 0){
            throw new LogicException('Division by zero');
        }
        return $a /$b;
    }

    try{
        div(10, '0');
    }catch(LogicException $e){
        echo "LogicException Occurred : " . ($e -> getMessage()) . "\n";
    }catch(RuntimeException $e){
        echo "RuntimeException Occurred : " . ($e -> getMessage()) . "\n";
    }
    
?>