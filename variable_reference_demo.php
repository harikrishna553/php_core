#!/usr/bin/php

<?php
    $a = 10;

    $b = & $a;

    echo "\$a : $a\n";
    echo "\$b : $b\n";

    echo "\nSetting \$b value to 1111\n\n";
    $b = 1111;

    echo "\$a : $a\n";
    echo "\$b : $b\n";

?>