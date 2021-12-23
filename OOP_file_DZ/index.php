<?php

require_once 'class/File.php';

$file = new File(__DIR__ . '/file.txt');

$file->writeFile('Random text');