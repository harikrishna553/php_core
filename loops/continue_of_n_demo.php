#!/usr/bin/php

<?php
for($i = 1; $i <5; $i++){

    for($j = 0; $j < 5; $j++){

        if($j > $i){
            echo "\n\n";
            continue(2);
        }

        $result = $i * $j;
        echo "$i * $j = $result\n";
    }
    
}
?>