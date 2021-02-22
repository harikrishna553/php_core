#!/usr/bin/php

<?php

    $msg1 = "Hello krishna, how are you?";
    $msg2 = ucwords($msg1);

    echo "msg1 : $msg1\n";
    echo "msg2 : $msg2\n";

    $msg3 = "Hello|krishna,|how|are|you?";
    $msg4 = ucwords($msg3, '|');

    echo "msg3 : $msg3\n";
    echo "msg4 : $msg4\n";
?>