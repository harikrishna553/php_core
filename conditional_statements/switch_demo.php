#!/usr/bin/php

<?php
$day = 3;

switch ($day) {
    case 1:
        echo "Sunday";
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
    case 7:
        echo "Saturday";
        break;
    default:
        echo "You entered wrong day number";
}

?>