<?php

require_once 'classes/Products.php';

$book = new Product('Gays', 20, null, 100);
$notebook = new Product('Dell', 20, 'intel');

var_dump($book);
var_dump($notebook);
var_dump($book->getProduct('book'));
var_dump($notebook->getProduct());
var_dump($notebook->getCpu());