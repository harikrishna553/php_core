#!/usr/bin/php

<?php

    $arr1 = array(2, 3, 5, 7);
    $arr2 = [[1, 2, 3, 4], [5, 6, 7, 8]];

    $number_of_elements = count($arr1);
    echo "number of elements in the array arr1 : $number_of_elements\n";

    $number_of_elements = count($arr2, 1);
    echo "number of elements in the array arr2 : $number_of_elements\n";
?>