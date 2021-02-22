#!/usr/bin/php

<?php

interface Circle{
    public function area_of_circle($radius);
    public function perimeter_of_circle($radius);
}

interface Logger{
    public function info($msg);
    public function debug($msg);
    public function error($msg);
}

class MyCircle implements Circle{
    public const PI = 3.14;

    public function area_of_circle($radius){
        return self::PI * $radius * $radius;
    }
    public function perimeter_of_circle($radius){
        return 2 * self::PI * $radius;
    }

    public function info($msg){
        echo $msg;
    }

    public function debug($msg){
        $this->info($msg);
    }

    public function error($msg){
        $this->info($msg);
    }

}

$circle1 = new MyCircle();
$radius = 12;

$area = $circle1->area_of_circle($radius);
$perimeter = $circle1->perimeter_of_circle($radius);

echo "Radius of Circle : $radius\n";
echo "Area of Circle : $area\n";
echo "Perimeter of Circle : $perimeter\n";

$circle1->debug("\nI am debug message\n");
$circle1->info("I am information message\n");
$circle1->error("I am error message\n");
?>