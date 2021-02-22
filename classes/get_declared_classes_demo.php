#!/usr/bin/php

<?php

    include 'employee.php';
    include 'student.php';

    $declared_classes = get_declared_classes();

    print_r($declared_classes);
?>