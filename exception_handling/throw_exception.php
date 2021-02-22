#!/usr/bin/php

<?php 

    function div($a, $b){
        if($b == 0){
            throw new LogicException('Division by zero');
        }
        return $a /$b;
    }

   $result1 = div(10, 3);

   echo "\$result1: $result1\n";

   $result1 = div(10, 0);
    
?>