#!/usr/bin/php

<?php

    class Employee{
        public $id;
        public $name;
        public $age;

        public function __construct($id, $name, $age){
            $this->id = $id;
            $this->name = $name;
            $this->age = $age;
        }

        public function __toString(){
            return "id : $this->id\nname : $this->name\nage: $this->age\n";
        }
    }

    $emp1 = new Employee(1, 'Krishna', 31);
    $info = (string)$emp1;

    echo $info;

?>