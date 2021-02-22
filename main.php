#!/usr/bin/php

<?php
    include 'utils/arithmetic.php';

    $arth = new Arithmetic();

    $sum_10_20 = $arth -> sum(10, 20);

    echo "sum of 10 and 20 is $sum_10_20"
?>