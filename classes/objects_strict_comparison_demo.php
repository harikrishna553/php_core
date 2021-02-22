#!/usr/bin/php

<?php

    class Employee{
        public $id;
        public $name;
        
        public function __construct($id, $name){
            $this->id = $id;
            $this->name = $name;
        }
    }

   
    class MyEmployee{
        public $id;
        public $name;
        
        public function __construct($id, $name){
            $this->id = $id;
            $this->name = $name;
        }
    }

    $emp1 = new Employee(1, 'Krishna');
    $emp1_reference = $emp1;
    $emp2 = new Employee(1, 'Krishna');
    $emp3 = new Employee(2, 'Shankar');
    $my_emp = new MyEmployee(1, 'Krishna');

    echo '$emp1===$emp1_reference : '. (($emp1===$emp1_reference)?'T':'F') . "\n";
    echo '$emp1===$emp2 : '. (($emp1===$emp2)?'T':'F') . "\n";
    echo '$emp1===$emp3 : '. (($emp1===$emp3)?'T':'F') . "\n";
    echo '$emp1===$my_emp : '. (($emp1===$my_emp)?'T':'F') . "\n";



?>