#!/usr/bin/php

<?php
echo "Printing numbers from 0 to 5\n";
for ($i = 0; $i < 10; $i ++) {
    echo "i = $i\n";
    if($i == 5){
        break;
    }
}

echo "\n\nPrinting stars in triangle shape\n";

for($i=0; $i<10; $i++){
    for($j=0; $j<10; $j++){
        if($j > $i){
            break;
        }
        echo"* ";
    }
    echo"\n";
}

?>