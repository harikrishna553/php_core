#!/usr/bin/php

<?php

    class ParentClass{
        public static $name = 'Parent class';
    }

    class ChildClass1 extends ParentClass{

    }

    class ChildClass2 extends ParentClass{

    }

    class ChildClass3 extends ChildClass2{

    }

    function print_name(){
        $name1 = ParentClass::$name;
        $name2 = ChildClass1::$name;
        $name3 = ChildClass2::$name;
        $name4 = ChildClass3::$name;

        echo "\nParentClass : $name1\n";
        echo "ChildClass1 : $name1\n";
        echo "ChildClass2 : $name1\n";
        echo "ChildClass3 : $name1\n";
    }
   
    print_name();

    echo "\nUpdating name using ChildClass1\n";
    ChildClass1::$name = "Child class1";

    print_name();

?>