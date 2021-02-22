#!/usr/bin/php

<?php
echo "Printing numbers from 0 to 9\n";
$i = 0;
do {
    echo "i = $i\n";
    $i ++;
} while ($i <= 9);

echo "\n\nPrinting values from 9 to 0\n";
$i = 9;
do {
    echo "i = $i\n";
    $i --;
} while ($i >= 0);

echo "\nElements of array: \n";
$arr1 = [
    2,
    3,
    'Hello',
    true
];

$i = 0;
do {
    echo "arr1[$i] : $arr1[$i]\n";
    $i ++;
} while ($i < count($arr1));
    
?>
