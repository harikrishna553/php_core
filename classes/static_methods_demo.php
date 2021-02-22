#!/usr/bin/php

<?php

    class Employee{
        public static $organization_name = 'ABC Corp';
        private static $total_employees = 100;

        private static function about_class(){
            $org_name = self::$organization_name;
            $total_emps = self::$total_employees;

            return "org name : $org_name \ntotal_emps : $total_emps";
        }

        public static function print_about_me(){
            $about_this_class = self::about_class();
            echo $about_this_class;
        }
    }

    Employee::print_about_me();
   
?>