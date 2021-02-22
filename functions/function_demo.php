#!/usr/bin/php

<?php

function print_array($arr)
{
    echo "Elements in the array";
    foreach ($arr as $key => $value) {
        echo "$key => $value\n";
    }

    echo "\n\n";
}

$arr1 = [
    "id" => 1,
    "age" => 32,
    "name" => "Sailu",
    "male" => false
];

$arr2 = array(
    2,
    3,
    'Hello',
    true
);

print_array($arr1);
print_array($arr2);
?>