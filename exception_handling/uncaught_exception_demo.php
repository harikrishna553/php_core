#!/usr/bin/php

<?php 

function div($a, $b){
    if($b == 0){
        throw new LogicException('Division by zero');
    }
    return $a /$b;
}

function my_exception_handler($e){
    echo "------------------------\n";
    echo "Uncaught exception handler\n";
    echo $e->getMessage();
    echo "\n------------------------\n";
}

set_exception_handler('my_exception_handler');

div(10, 0);
?>