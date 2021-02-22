#!/usr/bin/php

<?php
   function apply_this_function($a, $b, $my_function){
       return $my_function($a, $b);
   }

   $sum_of_10_20 = apply_this_function(10, 20, function($a, $b){
       return $a + $b;
   });

   $difference_of_10_20 = apply_this_function(10, 20, function($a, $b){
        return $a - $b;
    });

    $multiplication_of_10_20 = apply_this_function(10, 20, function($a, $b){
        return $a * $b;
    });

    $division_of_10_20 = apply_this_function(10, 20, function($a, $b){
        return $a / $b;
    });

   echo "Sum of 10 and 20 is $sum_of_10_20\n";
   echo "Difference of 10 and 20 is $difference_of_10_20\n";
   echo "Multiplication of 10 and 20 is $multiplication_of_10_20\n";
   echo "Division of 10 and 20 is $division_of_10_20\n";

?>

