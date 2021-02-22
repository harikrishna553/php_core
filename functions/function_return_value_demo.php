#!/usr/bin/php

<?php

function welcome_user($name)
{
    return "Hello $name\n";
}

function sum($a, $b)
{
    return $a + $b;
}

$welcome_message = welcome_user("Krishna");
$result = sum(10, 20);

echo $welcome_message;
echo "Sum of 10 and 20 is : $result";
?>