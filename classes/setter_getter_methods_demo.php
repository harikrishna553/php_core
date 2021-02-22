#!/usr/bin/php

<?php

    class Employee{
        private $id;
        private $name;
        private $age;

        public function get_id(){
            return $this->id;
        }

        public function set_id($id){
            if($id <= 0){
                trigger_error("id must be > 0");
            }
            $this->id = $id;
        }

        public function get_name(){
            return $this->name;
        }

        public function set_name($name){
            if(!isset($name) || trim($name) === ''){
                trigger_error("name must not be null or empty");
            }
            $this->name = $name;
        }

        public function get_age(){
            return $this->age;
        }

        public function set_age($age){
            if($age < 18){
                trigger_error("Minors are not supposed to do work");
            }

            $this->age = $age;
        }

        public function about_me(){
            echo "id : $this->id\n";
            echo "name : $this->name\n";
            echo "age : $this->age\n";
        }
    }

    $emp1 = new Employee();
    $emp1->set_id(2);
    $emp1->set_name("Krishna");
    $emp1->set_age(32);

    $emp1->about_me();
   
?>