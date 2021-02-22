#!/usr/bin/php

<?php

   $str1 = 'Hello';

   // strlen function do not return number of chars, it return number of bytes
   $str2 = 'Helloته'; 

   $length1 = strlen($str1);
   $length2 = strlen($str2);

   echo "\$str1 : $str1, length : $length1 \n";
   echo "\$str2 : $str2, length : $length2 \n";
?>