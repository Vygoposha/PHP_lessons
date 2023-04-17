<?php

$my_name = 'Igor Vygolovskiy';
$century = 20;
echo "Hello world <br>";

echo "Hello, $my_name <br>";

echo 'Сумма чисел 5+3 = ' . 3 + 5 . "<br>";
echo "$my_name was born in the " . $century . "th century <br>";
echo '$my_name was born in the $century th century <br>'; //Чтобы выводить переменные в тексте, нужно использовать двойные кавычки
echo "$my_name was born in the {$century}th century <br>";

$century = 30; //Обновление переменной
echo "$my_name was born in the {$century}th century <br>";

$company_name = 'Microsoft';

echo "company \"$company_name\" created Windows OS"; // Чтобы отобразить переменную в двойных кавычках используется экранирование \

?>


<div>
    <span>Текущая дата: <? echo "27.03.2023" ?></span><br>
    <span>Текущая дата: <?= "27.03.2023" ?></span><br>
    <span>Текущая дата: <?= date('d.m.y h:i:s') ?></span>
</div>

<?php
//Константа задается как define ("название","значение")
define("DB_LOGIN", "root"); //Конатсанта пишется в вехнер регистре
echo DB_LOGIN . "<br>";

define("COLORS", ['red', 'blue', 'green']); //внесение в константу массива
echo COLORS[2] . '<br>';
echo defined('DB_LOGIN') . '<br'; //функция defined проверяет существует ли указанная константа. Если да, выводит 1, если нет -не выводит ничего

?>

<?php
//Встроенные константы
echo __DIR__, '<br>'; //Выводит путь до директории файла
echo __FILE__, '<br>'; //Путь до файла
echo __LINE__, '<br>'; //Номер строки кода, где она написана
echo PHP_VERSION, '<br>';
error_reporting(E_ALL);
?>