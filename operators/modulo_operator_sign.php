#!/usr/bin/php

<?php
$a = 11;
$b = - 11;

$result1 = $a % 3; // 2
$result2 = $a % - 3; // 2
$result3 = $b % 3; // -2
$result4 = $b % - 3; // -2

echo "$a % 3 : $result1\n";
echo "$a % -3 : $result2\n";
echo "$b % 3 : $result3\n";
echo "$b % -3 : $result4\n";

?>