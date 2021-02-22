#!/usr/bin/php

<?php

    class ParentClass{
       public static function about_me(){
           echo "\n\nI am in parent class";
       }
    }

    class ChildClass1 extends ParentClass{

        public static function about_me(){
            ParentClass::about_me();
            echo "\nI am in ChildClass1";
        }
    }

    class ChildClass2 extends ParentClass{
        public static function about_me(){
            parent::about_me();
            echo "\nI am in ChildClass2";
        }
    }

    ParentClass::about_me();
    ChildClass1::about_me();
    ChildClass2::about_me();

?>