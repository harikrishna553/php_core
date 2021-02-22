#!/usr/bin/php

<?php

function say_hello()
{
    echo "I am in hello";
    return true;
}

// say_hello() function will not get called in all the below cases
$a = false && say_hello();
$b = false and say_hello();
$c = true || say_hello();
$d = true or say_hello();

echo '$a = ';
var_dump($a);

echo '$b = ';
var_dump($b);

echo '$c = ';
var_dump($c);

echo '$d = ';
var_dump($d);
?>