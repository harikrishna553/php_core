#!/usr/bin/php

<?php
$day = "one";

switch ($day) {
    case 'one':
    case 'seven':
        echo "Happy weekend!!!!";
        break;
    case 'two':
        echo "Monday";
        break;
    case 'three':
        echo "Tueday";
        break;
    case 'four':
        echo "Wednesday";
        break;
    case 'five':
        echo "ThursDay";
        break;
    case 'six':
        echo "Friday";
        break;
    default:
        echo "Wrong input!!!!";
}

?>