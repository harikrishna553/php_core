#!/usr/bin/php

<?php
   function welcome_me(){
        $my_name =  $GLOBALS['name'];
        $my_age =  $GLOBALS['age'];
        $my_msg =  $GLOBALS['msg'];

        $GLOBALS['msg'] = $my_msg . ' ' . $my_name . ', ' . 'you are ' . $my_age . ' years old';
   }

   $name = 'Krishna';
   $age = 32;
   $msg = 'Hello';

   welcome_me();
   echo $msg;

?>

