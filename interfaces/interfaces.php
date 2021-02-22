#!/usr/bin/php

<?php

interface Circle{
    public function area_of_circle($radius);
    public function perimeter_of_circle($radius);
}

class MyCircle implements Circle{
    public const PI = 3.14;

    public function area_of_circle($radius){
        return self::PI * $radius * $radius;
    }
    public function perimeter_of_circle($radius){
        return 2 * self::PI * $radius;
    }
}

$circle1 = new MyCircle();
$radius = 12;

$area = $circle1->area_of_circle($radius);
$perimeter = $circle1->perimeter_of_circle($radius);

echo "Radius of Circle : $radius\n";
echo "Area of Circle : $area\n";
echo "Perimeter of Circle : $perimeter\n";
?>