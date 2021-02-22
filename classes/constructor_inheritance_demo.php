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

    class Manager extends Employee{
        public $no_of_reportees;
     
        public function __toString(){
            return parent::__toString(). "no_of_reportees : $this->no_of_reportees\n";
        }
    }

    $manager1 = new Manager(1, 'Krishna', 31);
    $manager1->no_of_reportees = 3;
    $info = (string)$manager1;

    echo $info;

?>