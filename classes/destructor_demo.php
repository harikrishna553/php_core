#!/usr/bin/php

<?php

    class MyClass{
        public function __construct(){
            echo "Inside constructor\n";
        }

        public function __destruct(){
            echo "\nInside destructor\n";
        }
    }

    echo "About to create an object of MyClass\n";
    $obj1 = new MyClass();
    echo "Object created\n";

    echo "\nunsetting the object \$obj1\n";
    unset($obj1);

?>