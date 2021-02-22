#!/usr/bin/php

<?php

   function print_employee($emp){
       echo "\nid : $emp->id\n";
       echo "first_name : $emp->first_name\n";
       echo "last_name : $emp->last_name\n";
       echo "country : $emp->country\n";
   }

   class Employee{
        var $id;
        var $first_name;
        var $last_name;
        var $country='India';
   }

   $emp1 = new Employee;
   $emp1 -> id = 1;
   $emp1 -> first_name = 'Krishna';
   $emp1 -> last_name = 'Gurram';

   $emp2 = new Employee;
   $emp2 -> id = 2;
   $emp2 -> first_name = 'Gireesh';
   $emp2 -> last_name = 'Amara';
   $emp2 -> country = 'Australia';

   print_employee($emp1);
   print_employee($emp2);
?>