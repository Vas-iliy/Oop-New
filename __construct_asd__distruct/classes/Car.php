<?php


class Car
{
    public $color;
    public $wheels = 4;
    public $speed = 180;
    public $brand;

    public function __construct($color, $brand, $wheels = 4, $speed = 180)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;
    }

    public function getCreInfo() {
        return  "<h3>О моем авто:</h3>
                Марка: {$this->brand}<br/>
                Цвет: {$this->color}<br/>
                Кол-во колес: {$this->wheels}<br/>
                Speed: {$this->speed}<br/>";
    }

    public function __destruct()
    {
        var_dump($this);
    }
}