#!/usr/bin/php

<?php

   $var1 = true;
   $var2 = 123;

   echo "\n\$var1 : ";
   var_dump($var1);

   echo "\$var2 : $var2";

   echo "\n\nis \$var1 boolean : ";
   var_dump(is_bool($var1));

   echo "\nis \$var2 boolean : ";
   var_dump(is_bool($var2));
?>