<?php


class Car
{
    public $color;
    public $wheels;
    public $speed;
    public $brand;

    public static $countCar = 0;

    private const TEST_CAR = 'prototype';
    private const TEST_CAR_SPEED = 250;

    public function __construct($color, $brand, $wheels = 4, $speed = 180)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;

        self::$countCar++;
    }

    public static function getCount() {
        return self::$countCar;
    }

    public function getPrototypeInfo() {
        return  "<h3>Данные тестового авто</h3>
                Наименование: " . self::TEST_CAR ."<br/>
                Speed: " . self::TEST_CAR_SPEED ."<br/>";
    }

    public function getCreInfo() {
        return  "<h3>О моем авто:</h3>
                Марка: {$this->brand}<br/>
                Цвет: {$this->color}<br/>
                Кол-во колес: {$this->wheels}<br/>
                Speed: {$this->speed}<br/>";
    }
}