#!/usr/bin/php

<?php
    class MyClass{
        protected static $instance;

        public static function get_instance(){
            if(null === static::$instance){
                static::$instance = new static();
            }
            return static::$instance;
        }

        // Prevent creation of object using constructor
        protected function __construct(){

        }

        // Prevent cloning of object
        private function __clone(){

        }

        // Prevent unserializing of singleton
        private function __wakeup(){

        }

        public function about_me(){
            echo "\nI am MyClass instance\n";
        }
    }

    class MySubClass extends MyClass{
        protected static $instance;

        public function about_me(){
            echo "\nI am MySubClass instance\n";
        }
    }

    $my_instance_1 = MyClass::get_instance();
    $my_instance_2 = MyClass::get_instance();

    $my_instance_1->about_me();
    var_dump($my_instance_1 === $my_instance_2);

    $my_instance_3 = MySubClass::get_instance();
    $my_instance_4 = MySubClass::get_instance();

    $my_instance_3->about_me();

    var_dump($my_instance_3 === $my_instance_4);

    // Since constructor is private, below statement throws an error.
    //$my_instance_3 = new MySubClass();

    // Since clone method is private, following statement throws an error.
    //$my_instance_4 = clone $my_instance_2;
    
?>