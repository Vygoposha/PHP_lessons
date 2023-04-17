<?php
//Обычная запись условия If Else
$a = 0;
if ($a > 2) {
    echo '5 больше 2<br>';
} else {
    echo 'Другое выражение<br>';
}

//через тернарный оператор
echo $a ? "5 больше 2<br>" : 'Другое выражение<br>';

?>
<hr>
<?php

$price = 505;

if ($price >= 100) {
    echo "sale 30%<br>";
} elseif ($price >= 50) {
    echo 'sale 15%<br>';
} else {
    echo 'sale 10%<br>';
}

//запись черещ тернарный оператор 
$discount = $price >= 100 ? 30 : ($price >= 50 ? 15 : 10);
echo $discount . '%<br>';

?>
<hr>
<?php
//Функция ISSET определяет существует ли переменная со значением отличным от NULL

$name = "Igor";
if (isset($name)) {
    echo "Hello, $name!<br>";
} else {
    echo "Переменной не существует";
}

//EMPTY проверяет значение соотвевствует ли переменная однуму из значений "", false, 0, "0", null;
//!EMPTY можно использовать как отрицанее, то есть переменная принимает любое значение отличное от "", false, 0, "0", null;

//$_SESSION['user'] = 'Vygoposha';
$user = $_SESSION['user'] ?? 0; // ??0 значит isset($name) = true, то в переменную запишется Vygoposha, елси false, то в переменную запишется 0

if (empty($user)) {
    echo 'Guest mode';
} else {
}
echo "Hello, $user";

?>
<hr>

<?php
//Конструкция SWITCH - case
$lang =  $_GET['lang'] ?? 'ru'; //если существует, то берем из GET, если нет, то установливаем значение ru

switch ($lang) {
    case 'en':
        echo 'Hello world';
        break;
    case 'de':
        echo 'Привет мир на немецкоми';
        break;
    case 'ru':
    case 'Русский': //Может быть несколько вариантов значения case 
        echo 'Привет мир';
        break;
    default:
        echo 'Язык не поддерживается';
        break;
}

?>

<div>
    <a href="?lang=ru">Русский</a>
    <a href="?lang=en">Английский</a>
    <a href="?lang=de">Немецкий</a>
</div>