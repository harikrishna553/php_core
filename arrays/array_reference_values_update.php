#!/usr/bin/php

<?php
    $arr1 = array(2, 3, 5, 6);

    echo 'Contents of array arr1 :';
    print_r($arr1);

    echo "\nDoubling the contents of array\n\n";
    foreach($arr1 as &$ele){
        $ele = $ele * 2;
    }

    echo 'Contents of array arr1 :';
    print_r($arr1);
?>