<?php

require_once 'classes/Car.php';

function debug($data) {
    echo '<pre>'. print_r($data, 1) . '</pre>';
}

$car1 = new Car();
$car2 = new Car();
debug($car1);

$car1->color = 'Black';
$car1->brand = 'Volvo';
$car1->year = 2018;

$car2->color = 'White';
$car2->brand = 'BMW';
$car2->speed = 200;
$car2->year = 2010;

//debug($car1);
//debug($car2);

echo  "<h3>О моем авто:</h3>
Марка: {$car1->brand}<br/>
Цвет: {$car1->color}<br/>
Кол-во колес: {$car1->wheels}<br/>
Год выпуска: {$car1->year}<br/>
Speed: {$car1->speed}<br/>";