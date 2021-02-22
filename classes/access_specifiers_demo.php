#!/usr/bin/php

<?php

    class ParentClass{

        public function i_am_public(){
            echo "In public method\n";
        }

        protected function i_am_protected(){
            echo "In protected method\n";
        }

        private function i_am_private(){
            echo "In private method\n";
        }
    }

    class ChildClass extends ParentClass{

        function call_super_class_methods(){
            $this->i_am_public();
            $this->i_am_protected();
            // $this->i_am_private(); Do not run
        }
    }

    $p1 = new ParentClass();
    $p1->i_am_public();
   // $p1->i_am_protected(); Do not run
   // $p1->i_am_private();  Do not run

    $c1 = new ChildClass();
    $c1 -> call_super_class_methods();

?>