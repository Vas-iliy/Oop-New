<?php

namespace classes;

class Request
{
    private $data;

    public function __construct()
    {
        $this->data = $_REQUEST;
    }

    public function __get($name)
    {
        if (isset($this->data[$name])) return $this->data[$name];
        return null;
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __isset($name)
    {
        return isset($this->data[$name]);
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public function __call($name, $arguments)
    {
        echo 'method not exist';
    }
}