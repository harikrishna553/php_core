#!/usr/bin/php

<?php

    $arr = array(22, 31, -5, 77, -98, 18);
    
    echo "Original array : \n";
    print_r($arr);

    rsort($arr);

    echo "Sorted array in descending order : \n";
    print_r($arr);
    
?>