<?php
// Создаем пустой массив
$myArray = array();

// Добавляем пять разных чисел
$myArray[] = 10;
$myArray[] = 20;
$myArray[] = 30;
$myArray[] = 40;
$myArray[] = 50;

// Выводим массив с использованием цикла for
for ($i = 0; $i < count($myArray); $i++) {
    echo "Элемент $i: " . $myArray[$i] . "\n";
}
?>
