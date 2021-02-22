#!/usr/bin/php
<?php
    include 'logger.php';
    include 'dynamic_logger.php';

    use DynamicLogger\Logger as MyDynamicLogger;
    use CustomLogger\Logger as MyCustomLogger;

    $dyn_logger = new MyDynamicLogger();
    $cust_logger = new MyCustomLogger;

    $dyn_logger->log();
    $cust_logger->log();
    
?>