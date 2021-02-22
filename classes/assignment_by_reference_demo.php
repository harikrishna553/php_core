#!/usr/bin/php

<?php

    class Employee{
        public $id;
        public $name;
        
        public function __construct($id, $name){
            echo "Inside constructor\n";
            $this->id = $id;
            $this->name = $name;
        }

        public function __toString() {
            return "id : $this->id\n". 
             "name: $this->name\n";
        }

        public function about_me($name){
            echo "\n\n$name details:\n";
            echo $this->__toString();
        }

    }

    $emp1 = new Employee(1, 'krishna');
    $emp2 = $emp1;

    $emp1->about_me('emp1');
    $emp2->about_me('emp2');

    echo "\nUpdating the name property using the reference emp2\n";

    $emp2->name='Shankar';
    $emp1->about_me('emp1');
    $emp2->about_me('emp2');




?>