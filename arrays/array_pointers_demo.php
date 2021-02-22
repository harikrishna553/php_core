#!/usr/bin/php

<?php

$arr1 = array(2, 3, 5, 7, 11);

echo "Elements in array are : \n";
print_r($arr1);

$current_element = current($arr1);

echo "\nCurrent element : $current_element\n";

echo "\nAdvancing internal pointer to next index\n";
$current_element = next($arr1);

echo "\nElement returned by next function: $current_element\n";

$current_element = current($arr1);
echo "Current element : $current_element\n";

echo "\nAdvancing current pointer to one step backward\n";
$current_element = prev($arr1);
echo "\nElement returned by prev function : $current_element\n";

$current_element = current($arr1);
echo "\nCurrent element : $current_element\n";

echo "\nMoving the internal pointer to the end\n";
$current_element = end($arr1);
echo "\nElement returned by end function : $current_element\n";

$current_element = current($arr1);
echo "\nCurrent element : $current_element\n";

?>