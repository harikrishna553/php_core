#!/usr/bin/php

<?php

$arr1 = array(2, 3, 5, 7, 11);

echo "Traversing in forward direction\n";
while($current_ele = current($arr1)){
    echo "current element : $current_ele\n";
    next($arr1);
}

echo "\n\nTraversing in backward direction\n";
end($arr1);
while($current_ele = current($arr1)){
    echo "current element : $current_ele\n";
    prev($arr1);
}

?>