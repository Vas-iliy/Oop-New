<?php

require_once 'classes/Product.php';
require_once 'classes/BookProduct.php';

$book = new BookProduct('Gays', 1000, 100);

var_dump($book->getProduct());
$book->test();
