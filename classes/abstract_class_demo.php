#!/usr/bin/php

<?php

    abstract class Logger{
        public function log($msg){
            echo $msg;
        }

        public abstract function debug($msg);
        public abstract function info($msg);
        public abstract function error($msg);
    }
    
    class MyLogger extends Logger{
        public function debug($msg){
            $this->log($msg);
        }

        public function info($msg){
            $this->log($msg);
        }

        public function error($msg){
            $this->log($msg);
        }
    }

    $logger = new MyLogger();

    $logger->log("Simple log\n");
    $logger->debug("Debug log\n");
    $logger->info("Info log\n");
    $logger->error("Error log\n");
?>