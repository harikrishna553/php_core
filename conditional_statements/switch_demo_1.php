#!/usr/bin/php

<?php
$day = 1;

switch ($day) {
    case 1:
    case 7:
        echo "Happy weekend!!!!";
        break;
    case 2:
        echo "Monday";
        break;
    case 3:
        echo "Tueday";
        break;
    case 4:
        echo "Wednesday";
        break;
    case 5:
        echo "ThursDay";
        break;
    case 6:
        echo "Friday";
        break;
    default:
        echo "You entered wrong day number";
}

?>