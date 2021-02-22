#!/usr/bin/php

<?php

    function inc_by_10($a){
        include 'utils/arithmetic.php';

        $arth = new Arithmetic();

        return $arth -> sum($a, 10);
    }
    
    $a = 20;
    $a_plus_10 = inc_by_10($a);

    echo "a : $a\n";
    echo "a_plus_10 : $a_plus_10\n";
?>