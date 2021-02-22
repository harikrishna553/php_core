#!/usr/bin/php

<?php
$a = 10;
$b = 11;

$msg1 = ($a % 2 == 0) ? "Even number" : "Odd number";
$msg2 = ($b % 2 == 0) ? "Even number" : "Odd number";

echo "$a is $msg1\n";
echo "$b is $msg2";
?>