#!/usr/bin/php

<?php
echo "Printing numbers from 0 to 10, except 2, 3, 5\n";
for ($i = 0; $i < 10; $i ++) {
    if($i == 2 || $i == 3 || $i == 5){
        continue;
    }
    echo "i = $i\n";
}

echo "\nPrint multiplication table of 2 and 4, and exclude 1, 3, 5, 7 from multiplication\n";
for($i = 2; $i <5; $i++){
    if($i != 2 && $i != 4){
        continue;
    }

    echo "\n\n";

    for($j = 0; $j < 11; $j++){

        if($j == 1 || $j ==3
        || $j == 5 || $j == 7){
            continue;
        }

        $result = $i * $j;
        echo "$i * $j = $result\n";
    }
}
?>