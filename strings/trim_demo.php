#!/usr/bin/php

<?php

   $str1 = '     Hello      ';

   $ltrim_str = ltrim($str1);
   $rtrim_str = rtrim($str1);
   $trim_str = trim($str1);

   echo "\$str1 : '$str1'\n";
   echo "\$ltrim_str : '$ltrim_str'\n";
   echo "\$rtrim_str : '$rtrim_str'\n";
   echo "\$trim_str : '$trim_str'\n";
   
?>