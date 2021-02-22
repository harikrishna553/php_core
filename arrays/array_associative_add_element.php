#!/usr/bin/php

<?php
$arr1 = [
    'id' => 1,
    'age' => 32,
    'name' => 'Sailu',
    'male' => false
];

echo "Contents of arr1 are : \n";
print_r($arr1);

echo "\nAdding country key to the array\n";
$arr1['country'] = 'India';

print_r($arr1);

?>