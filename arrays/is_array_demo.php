#!/usr/bin/php

<?php

    $arr1 = array(22, 31, -5, 77, -98, 18);
    $var1 = 10;
    
    $is_arr1_array = is_array($arr1);
    $is_var1_array = is_array($var1);

    echo "is \$arr1 array ? ";
    var_dump($is_arr1_array);
    echo "\nis \$var1 array ? ";
    var_dump($is_var1_array);
?>