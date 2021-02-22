#!/usr/bin/php

<?php
    $arr1 = array(1, 34, 54, 23, 12, 31);

    echo 'Elements of array arr1 are: ';
    print_r($arr1);

    // Sort elements in ascending order
    echo "\nSort elements in ascending order\n";
    usort($arr1, function($a, $b){
        return $a <=> $b;
    });

    echo 'Elements of array arr1 are: ';
    print_r($arr1);

    // Sort elements in descending order
    echo "\nSort elements in descending order\n";
    usort($arr1, function($a, $b){
        return $b <=> $a;
    });

    echo 'Elements of array arr1 are: ';
    print_r($arr1);

?>

