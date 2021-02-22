#!/usr/bin/php

<?php
    function square(&$a){
        $a = $a * $a;
    }

    $ele = 10;

    echo "Value of ele : $ele\n";
    echo "Calling square function\n";

    square($ele);
    echo "Value of ele : $ele\n";
?>