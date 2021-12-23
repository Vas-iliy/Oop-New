<?php
use classes\BookProduct;

require_once __DIR__ . '/vendor/autoload.php';

/*function autoloder($class) {
    $class = str_replace("\\", '/', $class);
    $file = __DIR__ . "/{$class}.php";
    if (file_exists($file)) {
        require_once $file;
    }
}
spl_autoload_register('autoloder');*/

$book = new BookProduct('Gays', 1000, 100);

var_dump($book->getProduct());
$book->test();

$mail = new \PHPMailer\PHPMailer\PHPMailer();
var_dump($mail);
