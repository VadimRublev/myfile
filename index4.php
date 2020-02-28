<?php
echo 'Текущая версия PHP: ' . PHP_VERSION . "<br><br>";
echo 'Текущий каталог, в котором расположен скрипт: ' . __DIR__ . "<br><br>";
echo 'Полный путь и имя текущего файла: ' . __FILE__ . "<br><br>";
echo 'Текущая строка в файле: ' .__LINE__ . "<br><br>";

define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '/php/file.php');