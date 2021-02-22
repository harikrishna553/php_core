#!/usr/bin/php

<?php

    $arr1 = array(22, 31, -5, 9, 77, -98, 18);
    
    $is_9_exist = in_array(9, $arr1);
    $is_char_9_exist = in_array('9', $arr1);
    $is_char_9_exist_strict_comp = in_array('9', $arr1, true);

    echo "Is 9 exist in the array : ";
    var_dump($is_9_exist);

    echo "\nIs '9' exist in the array : ";
    var_dump($is_char_9_exist);

    echo "\nIs '9' exist in the array (stricct comparison) : ";
    var_dump($is_char_9_exist_strict_comp);
?>