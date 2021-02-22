#!/usr/bin/php

<?php

   class Employee{
        var $id;
        var $first_name;
        var $last_name;
        var $country='India';
        var $designation = 'Developer';

        function about_me(){
            echo "Hello ($this->first_name,$this->last_name), you are from $this->country\n";
        }
   }

   class Manager extends Employee{
       var $reportee_ids;
       var $designation = 'Engineering Manager';

       function about_me(){
           echo "first_name : $this->first_name\n";
           echo "last_name : $this->last_name\n";
           echo "designation : $this->designation\n";
           echo "Reportee ids : ";
           print_r($this->reportee_ids);
       }
   }

   $manager1 = new Manager();
   $manager1->id = 1;
   $manager1->first_name = 'Vadiraj';
   $manager1->last_name = 'Arora';
   $manager1->reportee_ids = array(2, 3, 43, 21);

   $manager1->about_me();

   echo $info;
?>