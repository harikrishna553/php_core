#!/usr/bin/php

<?php

    class Employee{
        private $org = 'ABC Corp';

        public function get_org(){
            return $this->org;
        }
    }

    class Manager extends Employee{

    }

    $emp1 = new Manager();

    $emp1->org = 'XYZ Corp';

    echo "\$$emp1->org : $emp1->org\n";
    echo "\$Actual organization: {$emp1->get_org()}";
?>