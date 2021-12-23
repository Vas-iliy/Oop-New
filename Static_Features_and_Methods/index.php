<?php

require_once 'classes/Car.php';

function debug($data) {
    echo '<pre>'. print_r($data, 1) . '</pre>';
}

$car1 = new Car('Black', 'Volvo');
echo $car1->getCreInfo();
echo $car1->getPrototypeInfo();

$car2 = new Car('Black', 'Volvo', 4, 200);
echo $car2->getCreInfo();

echo Car::getCount();

echo Car::class;