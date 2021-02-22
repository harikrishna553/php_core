#!/usr/bin/php

<?php
echo "Printing numbers from 0 to 9";
for ($i = 0; $i < 10; $i ++) {
    echo "i = $i\n";
}

echo "\n\nPrinting values from 9 to 0";
for ($i = 9; $i >= 0; $i --) {
    echo "i = $i\n";
}

echo "\nElements of array: \n";
$arr1 = [
    2,
    3,
    'Hello',
    true
];
for ($i = 0; $i < count($arr1); $i ++) {
    echo "arr1[$i] : $arr1[$i]\n";
}

?>