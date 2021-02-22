#!/usr/bin/php

<?php

function print_student_percentage($percentage)
{
    if ($percentage < 35) :
        echo "Percentage : $percentage. You are not passed\n";
     elseif ($percentage < 50) :
        echo "Percentage : $percentage. You are passed and got third class\n";
     elseif ($percentage < 60) :
        echo "Percentage : $percentage. You are passed and got second class\n";
     elseif ($percentage < 70) :
        echo "Percentage : $percentage. You are passed and got first class\n";
    else :
        echo "Percentage : $percentage. You are passed and got distinction\n";
    endif;
}

print_student_percentage(55);
print_student_percentage(17);
print_student_percentage(98);
?>

