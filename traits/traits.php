#!/usr/bin/php

<?php

trait Logger{
    public function info($msg){
        $this->log($msg);
    }

    public function debug($msg){
        $this->log($msg);
    }

    public function error($msg){
        $this->log($msg);
    }

    private function log($msg){
        echo $msg;
    }
}

class MyClass{
    use Logger;
}

$obj = new MyClass();

$obj->debug("\nI am debug message\n");
$obj->info("I am information message\n");
$obj->error("I am error message\n");
?>