<?php
//Подключение функций из внешнего файла
//require - остановит выполнение кода
//include - вернет ошибку и продолжит выполнение

//require ('func.php');//подключение фунций из внешнего файла func.php
//будет ошибка если дважды подключить через require. 
require_once('func.php');//можно подключать сколько угодно раз, будте не повторно подключение нового файла, а подключение к старому

echo foo_sum(10,13),'<br>';


echo foo_sum1(10.7,13),'<br>';




echo foo_sum2(10,'12'),'<br>';

?>

<hr>
<?php


$x = 150;
echo foo_change($x),'<br>';

//Чтобы изменять x глабально, а не локально в функции, нужно сделать жесткую ссылку на пееременную через &


$y = 150;
foo_change1($y);
echo $y,'<br>';

//Можно использовать глобальную переменную внутри функции
$z = 135;
echo $z,'<br>';

foo_change2();
echo $z,'<br>';

?>

<hr>
<?php
//Обалсть видимости констант
define('login','iavygolo');

echo show_login(),'<br>';

//С использованием функции static

foo_count();
foo_count();
foo_count();
