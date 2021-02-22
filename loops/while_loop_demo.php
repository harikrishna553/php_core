#!/usr/bin/php

<?php
echo "Printing numbers from 0 to 9\n";
$i = 0;
while($i < 10){
    echo "i = $i\n";
    $i++;
}


echo "\n\nPrinting values from 9 to 0\n";
$i=9;
while($i >= 0)
{
    echo "i = $i\n";
    $i--;
}

echo "\nElements of array: \n";
$arr1 = [
    2,
    3,
    'Hello',
    true
];

$i=0;
while($i < count($arr1)){
    echo "arr1[$i] : $arr1[$i]\n";
    $i++;
}

?>