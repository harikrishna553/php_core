#!/usr/bin/php

<?php
$a = 10;
$b = 11;
$c = '10';

echo "a : $a\n";
echo "b : $b\n";
echo "c : '$c'\n";

echo "\n" . '$a == $b : ';
var_dump($a == $b);

echo '$a == $c : ';
var_dump($a == $c);

echo '$a != $b : ';
var_dump($a != $b);

echo '$a != $c : ';
var_dump($a != $c);

echo '$a === $b : ';
var_dump($a === $b);

echo '$a === $c : ';
var_dump($a === $c);

echo '$a !== $b : ';
var_dump($a !== $b);

echo '$a !== $c : ';
var_dump($a !== $c);

echo '$a < $b : ';
var_dump($a < $b);

echo '$a > $b : ';
var_dump($a > $b);

echo '$a <= $b : ';
var_dump($a <= $b);

echo '$a >= $b : ';
var_dump($a >= $b);

echo '$a < $c : ';
var_dump($a < $c);

echo '$a > $c : ';
var_dump($a > $c);

echo '$a <= $c : ';
var_dump($a <= $c);

echo '$a >= $c : ';
var_dump($a >= $c);

?>