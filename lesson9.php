<?php
//Математические функции
abs(-20).'<br>';//модуль числа
sqrt(25);//квадратный корень
pow(9,3);//возведение в степень
pow(125,1/3);//Кубический или квадратный корень
M_PI;//константа число пи
M_E;//константа число E
round(12.55,1);
//метематическое округления. второй параметр указывает порядок округления
floor(33.99);//округление всегда в меньшую сторону
ceil(33.01);//окргление всегда в большую сторону
mt_rand(0,100);//вывод рандомного значения в интервале
min(0,-30,5,-10,12);//нахождение минимального значения в массиве
max(0,-30,5,-10,12);//нахождение максимального значения в массиве
base_convert(125,10,2);//перевод между системами счисления(из 10 в 2)
?>

<?php
//Фукнции для работы со строками
$str = 'Hello world world';
$str1 = 'Привет';
strlen($str);//возвращает длину строки в байтах
mb_strlen($str);//возвращает длину строки
ucfirst('irkutsk');//Переводит 1 символ строки в верхний регистр
lcfirst('Irkutsk');//Переводит 1 символ строки в нижний регистр
ucwords('hello world!');//перевод 1 символа каждого слова в строке в верхний регистр
strtoupper('HeLLo world');//перевод всей строки в верхний регистр
strtolower('HeLLo world');//перевод всей строки в нижний регистр
str_replace('Hello','goodbay',$str);//замена символов(слов) в строке
substr_replace($str,'мир',-11, 5);
//замена части указанной строки(строк,на что поменять,симвло начала замены, кол-во символов для замены);
trim('     iavygolo    ');//удаление пробелов из начала и конца строки
trim('  !@iavygolo!!!!%;  ',' !@%;');//вторым параметром указать символы котоыре нужно удавлить
strrev('dlrow');//разворот строки(не работает с кирилицей)
strip_tags('<h1>Hello <b>world</b></h1>',['<b>']);//удаляет теги из строки
//вторым параметром указываются теги исключения
htmlspecialchars("<h1>Hello <b>'world'</b></h1>");//преобразование тегов в символы тегов
?>

<?php
//хеширование
md5('123456');//самое простое хеширование пароля
echo password_hash('123456',PASSWORD_DEFAULT);//хеширование пароля, каждый раз обновляется


?>