<?php
$file = 'hello.txt';
// Открытие файла для получения существующего содержимого
$current = file_get_contents($file);
// Добавление новой записи в файл
$current = "Hello, World!";
// Запись содержимого обратно в файл
file_put_contents($file, $current);
echo $current . "<br><br>";
?>


<?php
//создание переменной, использование ф-ии date, указание формата вывода текущей даты и текущего времени
$file = date("2019-07-13-17-12-00");
echo 'Дата: ' . $file . "<br><br>";
$file = '2019-07-13-17-12-00.txt';
$current = file_get_contents($file);
$current = mt_rand(0, PHP_INT_MAX);
file_put_contents($file, $current);
echo 'Случайное число: ' . $current . "<br><br>";
?>



