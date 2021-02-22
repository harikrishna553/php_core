#!/usr/bin/php

<?php
    class MyClass{
        public static function get_instance(){
            return new static();
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

    $obj1 = MyClass::get_instance();
    $obj2 = MyChildClass::get_instance();

    $obj1->about_me();
    $obj2->about_me();
    
?>