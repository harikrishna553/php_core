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

    }

    $emp1 = new Employee(1, 'Krishna');
    $msg = (string)$emp1;
    echo $msg;

    $emp2 = clone $emp1;
    echo "\nCloning the object\n";
    $msg = (string)$emp2;

    $msg = (string)$emp2;
    echo "\ncloned object details\n $msg";

    echo "\n\nUpdating id and name of cloned object\n";
    $emp2->id = 2;
    $emp2->name='PTR';

    $msg = (string)$emp1;
    echo "emp1 details \n $msg\n";

    $msg = (string)$emp2;
    echo "\ncloned object details\n $msg\n";

?>