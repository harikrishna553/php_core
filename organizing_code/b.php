#!/usr/bin/php

<?php
    include 'a.php';

    echo "my_org_name : $my_org_name\n";

    echo "\nSetting my_org_name to XYZ Corp\n";
    $my_org_name = 'XYZ Corp';

    echo "Reincluding the file a.php\n";
    //include 'a.php';
    include_once 'a.php';

    echo "my_org_name : $my_org_name\n";

?>

