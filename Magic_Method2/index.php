<?php

use classes\Request;

function autoloder($class) {
    $class = str_replace("\\", '/', $class);
    $file = __DIR__ . "/{$class}.php";
    if (file_exists($file)) {
        require_once $file;
    }
}
spl_autoload_register('autoloder');

$request = new Request();
//echo $request->a;

//$request->a = 50;

echo isset($request->a);

$r = clone $request;
