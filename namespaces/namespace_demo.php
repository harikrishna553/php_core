#!/usr/bin/php

<?php
   include 'arithmetic_utils_1.php';
   include 'arithmetic_utils_2.php';

   $radius = 12.34;

   $area_of_circle_1 = nominal\area_of_circle($radius);
   $area_of_circle_2 = accurate\area_of_circle($radius);

   echo "for the radius $radius\n";
   echo "area_of_circle_1 : $area_of_circle_1\n";
   echo "area_of_circle_2 : $area_of_circle_2\n";

?>

