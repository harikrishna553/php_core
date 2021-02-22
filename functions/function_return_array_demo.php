#!/usr/bin/php

<?php
    function calc_arithmetic($var1,$var2){
        $sum = $var1 + $var2;
        $sub = $var1 - $var2;
        $mul = $var1 * $var2;
        $div = $var1 / $var2;

        return array(
            'sum'=>$sum,
            'sub'=>$sub,
            'mul'=>$mul,
            'div'=>$div
        );
    }

    $a = 20;
    $b = 3;
    $result = calc_arithmetic($a, $b);

    echo "Sum of $a and $b is {$result['sum']}\n";
    echo "Subtraction of $a and $b is {$result['sub']}\n";
    echo "Multiplication of $a and $b is {$result['mul']}\n";
    echo "Division of $a and $b is {$result['div']}\n";
?>