#!/usr/bin/php

<?php

    class Employee{
        public const ORGANIZATION_NAME = 'ABC Corp';
        private static $total_employees = 100;

        public static function about_class(){
            $org_name = self::ORGANIZATION_NAME;
            $total_emps = self::$total_employees;

            echo "organization name : $org_name\n";
            echo "total employees : $total_emps\n";
        }

    }

    $org_name = Employee::ORGANIZATION_NAME;
    echo "organization name(outside of class) : $org_name\n";

    Employee::about_class();
   
?>