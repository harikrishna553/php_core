#!/usr/bin/php

<?php

class Employee{
    var $id;
    var $first_name;
    var $last_name;
    var $age;

    function __construct($id, $first_name, $last_name, $age){
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
    }

    // Gettter methods
    public function get_id(){
        return $this->id;
    }

    public function get_first_name(){
        return $this->first_name;
    }

    public function get_last_name(){
        return $this->last_name;
    }
    
    public function get_age(){
        return $this->age;
    }

    // Setter methods
    public function set_id($new_id){
        $this->id = $new_id;
    }

    public function set_first_name($new_first_name){
        $this->first_name = $new_first_name;
    }

    public function set_last_name($new_last_name){
        $this->last_name = $new_last_name;
    }

    public function set_age($new_age){
        $this->age = $new_age;
    }

    public function to_string(){
        return $this->get_id() . ', ' . $this->full_name() . ', ' . $this->get_age();
    }

    // private methods
    private function full_name(){
        return $this->get_first_name() . ',' . $this->get_last_name();
    }
}

$emp1 = new Employee(1, 'Krishna', 'Gurram', 31);
$emp2 = new Employee(2, 'Chamu', 'Gurram', 30);

echo"id, name, age\n";
echo $emp1->to_string();
echo "\n";
echo $emp2->to_string();

?>