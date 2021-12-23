<?php


class File
{
    public $file;
    public $nameFile;

    public function __construct($nameFile)
    {
        $this->nameFile = $nameFile;
        if (!is_writable($this->nameFile)) {
            echo "Файл не доступен для записи";
            exit();
        }

        $this->file = fopen($nameFile, 'a');

    }

    public function __destruct()
    {
        fclose($this->file);
    }

    public function writeFile($text) {
        if (isset($this->file)) {
            fwrite($this->file, $text . PHP_EOL);
        }

        return true;
    }
}