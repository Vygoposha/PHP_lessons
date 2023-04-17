<?php
//Создаем константы для доступа в БД
define('DB_LOGIN', 'admin');
define('DB_PASSWORD', 'admin');
define('DB_NAME', 'new_db');
define('SERVERNAME', 'localhost');

// создаем подключение к БД через объект mysql
$connect = new mysqli(SERVERNAME,DB_LOGIN,DB_PASSWORD,DB_NAME);
// создаем переменную и пишем в нее SQL запрос
$sql = "UPDATE `heroes` SET `age` = 39 WHERE `name`='Йенифер'";
// Выполняем запрос чезер функцию query
$connect->query($sql);
// Закрываем соединение с БД
$connect->close();

?>