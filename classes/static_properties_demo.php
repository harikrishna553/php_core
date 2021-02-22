#!/usr/bin/php

<?php

    class Employee{
        public static $organization_name = 'ABC Corp';
        private static $total_employees = 100;

        public static function about_class(){
            $org_name = self::$organization_name;
            $total_emps = self::$total_employees;

            echo "organization name : $org_name\n";
            echo "total employees : $total_emps\n";
        }

    }

    $org_name = Employee::$organization_name;
    //since total_employees is private, this will not run
    //$total_emp = Employee::$total_employees; 
   
    Employee::about_class();
   
?>