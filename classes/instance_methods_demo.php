#!/usr/bin/php

<?php

   class Employee{
        var $id;
        var $first_name;
        var $last_name;
        var $country='India';

        function about_me(){
            echo "id : $this->id\n";
            echo "first_name : $this->first_name\n";
            echo "last_name : $this->last_name\n";
            echo "country : $this->country\n";
        }
   }

   $emp1 = new Employee;
   $emp1 -> id = 1;
   $emp1 -> first_name = 'Krishna';
   $emp1 -> last_name = 'Gurram';
   
   $emp1 -> about_me();
?>