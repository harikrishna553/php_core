#!/usr/bin/php

<?php
$emp1 = [
    "id" => 1,
    "age" => 32,
    "name" => "Sailu",
    "male" => false
];

$emp2 = [
    "id" => 2,
    "age" => 45,
    "name" => "Deeraj",
    "male" => true
];

$emps = [
    $emp1,
    $emp2
];

echo "Contents of arr1 are : \n";
foreach ($emps as $emp) {
    echo "Employee details: \n";
    foreach ($emp as $key => $value) {
        echo "$key => $value\n";
    }
    echo "\n\n";
}

?>