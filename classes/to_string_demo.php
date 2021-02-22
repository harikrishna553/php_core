#!/usr/bin/php

<?php

   class Employee{
        var $id;
        var $first_name;
        var $last_name;
        var $country='India';

        function __toString(){
            return "Hello $this->first_name, you are from $this->country\n";
        }
   }

   $emp1 = new Employee;
   $emp1 -> id = 1;
   $emp1 -> first_name = 'Krishna';
   $emp1 -> last_name = 'Gurram';
   
   $info = (string)$emp1;
   echo $info;
?>