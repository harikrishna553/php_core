#!/usr/bin/php

<?php
   function welcome_me(){
        global $name;
        global $age;
        global $msg;

        $msg = $msg . ' ' . $name . ', ' . 'you are ' . $age . ' years old';
   }

   $name = 'Krishna';
   $age = 32;
   $msg = 'Hello';

   welcome_me();
   echo $msg;

?>

