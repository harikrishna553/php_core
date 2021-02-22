#!/usr/bin/php

<?php

    class MyClass{
        public function __construct(){
            echo "I am in MyClass\n";
        }
    }

    echo "About to create an object of MyClass\n";
    $obj1 = new MyClass();

    echo "Object created\n";

?>