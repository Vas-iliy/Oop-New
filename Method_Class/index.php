<?php

require_once 'classes/Car.php';

function debug($data) {
    echo '<pre>'. print_r($data, 1) . '</pre>';
}

$car1 = new Car();
$car1->color = 'Black';
$car1->brand = 'Volvo';

echo $car1->getCreInfo();

$car2 = new Car();
$car2->color = 'Black';
$car2->brand = 'BMW';

echo $car1->getCreInfo();