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

        public function __clone(){
            echo "\nIn clone method\n";
        }

    }

    $emp1 = new Employee(1, 'Krishna');
    $msg = (string)$emp1;
    echo $msg;

    echo "\nCloning the object\n";
    $emp2 = clone $emp1;
    
    $msg = (string)$emp2;

    $msg = (string)$emp2;
    echo "\ncloned object details\n$msg";

?>