#!/usr/bin/php

<?php
$arr1 = [
    "id" => 1,
    "age" => 32,
    "name" => "Sailu",
    "male" => false
];

echo "Contents of arr1 are : \n";
foreach ($arr1 as $key => $val) {
    echo "$key => $val\n";
}

?>