<?php

require_once 'classes/Products.php';
require_once 'classes/NotebookProduct.php';
require_once 'classes/BookProduct.php';

$book = new BookProduct('Gays', 1000, 100);
$notebook = new NotebookProduct('Dell', 20000, 'AMD');

var_dump($book->getProduct());
var_dump($notebook->getProduct());