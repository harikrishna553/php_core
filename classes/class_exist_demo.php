#!/usr/bin/php

<?php

    $is_exist = class_exists('Employee');
    echo "is Employee exist : ";
    var_dump($is_exist);

    include 'employee.php';

    $is_exist = class_exists('Employee');
    echo "\nis Employee exist : ";
    var_dump($is_exist);

?>