#!/usr/bin/php

<?php
$emps = [
    'Chamu' => array(
        'id' => 1,
        'age' => 32,
        'male' => false
    ),
    'Krishna' => array(
        'id' => 2,
        'age' => 32,
        'male' => true
    )
];

$krishna_age = $emps['Krishna']['age'];
$chamu_id = $emps['Chamu']['id'];

echo "Krishna age : $krishna_age\n";
echo "Chamu id : $chamu_id";

?>