#!/usr/bin/php

<?php
    class MyClass{
        public static function get_instance_using_static(){
            return new static();
        }

        public static function get_instance_using_self(){
            return new self();
        }

        public function about_me(){
            echo "I am an instance of MyClass\n";
        }
    }

    class MyChildClass extends MyClass{
        public function about_me(){
            echo "I am an instance of MyChildClass\n";
        }
    }

    echo "Creating instances using new static()\n";
    $obj1 = MyClass::get_instance_using_static();
    $obj2 = MyChildClass::get_instance_using_static();
    $obj1->about_me();
    $obj2->about_me();

    echo "\nCreating instances using new self()\n";
    //Both the statements return an instance of MyClass
    $obj1 = MyClass::get_instance_using_self();
    $obj2 = MyChildClass::get_instance_using_self();
    //Both print the message 'I am an instance of MyClass'
    $obj1->about_me();
    $obj2->about_me();
    
?>