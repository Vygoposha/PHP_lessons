<?php 

//Типы данных
$name = 'Igor';//Тип данных строк(String)
$name2 = 'Игорь';

echo gettype($name).'<br>';//Функция определения типа переменной - вывод типа
echo is_string($name2).'<br>';//Определение является ли переменная строкой - вывод 1 или не выводит ничего если не строка

//var_dump - вывод информации о переменной
echo var_dump($name).'<br>';//string(4) "Igor"; 4 - число байт для кодировки
echo var_dump($name2).'<br>';//string(10) "Игорь" - 10 кирилица кодируется по 2 байта на символ

?>

<?php 

$num = 33;//Тип данных число(Integer). Записывать можно в любой системе исчисления
echo $num, '<br>';
echo gettype($num).'<br>';
echo is_int($num).'<br>';
echo var_dump($num).'<br>';

?>

<?php 
$a = 3.5; //Тип данных дробное(Float);
$b = 5e2; // 5 * 10^2
$c = 5e-2; // 5 / 10^2

echo "a = $a, b = $b, c = $c <br>";

?>

<?php 
//Boolean
$rain = true;
$snow = false;

echo "rain = $rain, snow = $snow <br>";
echo gettype($snow),'<br>';
echo var_dump($snow),'<br>';
$var = null;// пустое значение, остуствие значения и типа

?>

<?php

//Массив - Array
$array = [1, 3, 'ara', 3.5];//Простой массив, вывод по порядковому номеру
echo $array[3],'<br>';

$a_array = ['name'=>'Igor', 'age'=>33, 'city' => 'Irkutsk'];//Ассоциативный массив
echo $a_array['name'],'<br>';
print_r($array);
echo '<pre>';
print_r($a_array);
echo '</pre>';

?>

<?php
//Тип данных Resourse(ресурс) - ссылка на венешнйи ресурс

$book = fopen('resourse/text.txt', 'r');
echo $book.'<br>'; 

?>

<?php
//Object - Объект
/*$mysql = new mysqli('localhost','logn','password','DB_name');
echo $mysql,'<br>';
echo gettype($mysql),'<br>';
var_dump($mysql);
*/
?>

<?php

//Неявное приведение типа
$a = 5;
echo gettype($a).'<br>';
$a = $a*1.5;
echo gettype($a).'<br>';
$a = $a.'string';
echo gettype($a).'<br>';

//Принудительное приведение типов
$b = 3;
$b = (string) $b;
echo gettype($b).'<br>';

$b = (float) $b;
echo gettype($b).'<br>';

$b = (bool) $b;
echo gettype($b).'<br>';
echo $b.'<br>';

$c = '33';
$c = (int)$c;
echo gettype($c).'<br>';
$c = (array)$c;
echo gettype($c).'<br>';
print_r($c);

?>