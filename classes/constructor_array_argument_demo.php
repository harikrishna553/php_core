#!/usr/bin/php

<?php

    class Employee{
        public $id;
        public $name;
        public $age;
        public $street;
        public $city;
        public $state;
        public $country;
        public $pin;

        public function __construct($arr=[]){
            $this->id = $arr['id'];
            $this->name = $arr['name'];
            $this->age = $arr['age'];
            $this->street = $arr['street'];
            $this->city = $arr['city'];
            $this->state = $arr['state'];
            $this->country = $arr['country'];
            $this->pin = $arr['pin'];
        }

        public function __toString(){
            return "id : $this->id\n"
            . "name : $this->name\n"
            . "age: $this->age\n"
            . "street : $this->street\n"
            ."city : $this->city\n"
            . "state : $this->state\n"
            ."country : $this->country\n"
            ."pin: $this->pin\n";
        }
    }

    $emp1 = new Employee(
        [
            'id'=>1, 
            'name'=>'Krishna', 
            'age'=>31, 
            'street'=>'Chamundeswari street', 
            'city'=>'Bangalore', 
            'state'=>'Karnataka', 
            'country'=>'India', 
            'pin'=>'560032']
        );
    $info = (string)$emp1;

    echo $info;

?>

