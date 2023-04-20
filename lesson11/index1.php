<?php
//Создаем константы для доступа в БД
define('SERVERNAME', 'localhost');
define('DB_LOGIN', 'admin');
define('DB_PASSWORD', 'admin');
define('DB_NAME', 'new_db');
$name=$age=$rank='';



$name=$age=$rank='';
$connect = new mysqli(SERVERNAME, DB_LOGIN, DB_PASSWORD, DB_NAME); // создаем подключение к БД через объект mysql
$sql = "SELECT * FROM `heroes`"; // Записываем все данные из таблицы в переменную. Добавляем сортировку по rank
// $sql = "SELECT * FROM `heroes` ORDER BY `rank` DESC";
$result = $connect->query($sql); // Выполняем запрос чезер функцию query и записываем в переменную
// $user = $result->fetch_assoc(); // Первращаем объект в массив
// Чтобы вывести всю таблицу, необходимо использовать цикл for в ассоциативный массив
for ($user = array(); $row = $result->fetch_assoc(); $user[] = $row);
    // print_r($user);

$connect ->close(); // Закрываем соединение с БД

// проверяем была ли отправлена форма
if (isset($_POST['add'])) {
    // сохраняем значения из пост запроса в переменную. Если значение не было введено, то подставляем по умолчанию 0
    $name = $_POST['name'] ?? '0';
    $age = $_POST['age'] ?? '0';
    $rank = $_POST['rank'] ?? '0';
    $connect = new mysqli(SERVERNAME, DB_LOGIN, DB_PASSWORD, DB_NAME);    // присоединяемся к БД
    $sql = "INSERT INTO `heroes`(`name`,`age`,`rank`) VALUES('$name','$age','$rank')";    // создаем sql запрос
    $connect->query($sql);    // Выполняем запрос
    $connect->close();
    header("Location: /PHP_lessons/lesson11/index1.php");
}

if(isset($_GET['change'])){
    $id = $_GET['change']??'';
    $name = $user[$id]['name']??'';
    $age = $user[$id]['age']??'';
    $rank = $user[$id]['rank']??'';
    $id_base=$user[$id]['id']??'';
    
}

?>

<form action="#" method="POST">
    <input type="text" name="name" placeholder="name" id="" value="<?=$name?>">
    <input type="number" name="age" id="" placeholder="age" value="<?=$age?>">
    <input type="number" name="rank" id="" placeholder="rank" value="<?=$rank?>">
    <input type="submit" value="add" name="add">
    <?php if (isset($_GET['change'])): ?>
    <input type="submit" value="Edit" name="edit_heroes">
    <input type="submit" value="Delete" name="delete_heroes">
    <?php endif; ?>
</form>

<?php

if(isset($_POST['edit_heroes'])){
    $name = $_POST['name'] ?? '0';
    $age = $_POST['age'] ?? '0';
    $rank = $_POST['rank'] ?? '0';
    $connect = new mysqli(SERVERNAME, DB_LOGIN, DB_PASSWORD, DB_NAME);    // присоединяемся к БД
    $sql = "UPDATE `heroes` SET `name`='$name', `age`='$age' , `rank`='$rank' WHERE `id`='$id_base'";    // создаем sql запрос
    $connect->query($sql);    // Выполняем запрос
    $connect->close();
    header("Location: /PHP_lessons/lesson11/index1.php");
}


if(isset($_POST['delete_heroes'])){
    $connect = new mysqli(SERVERNAME, DB_LOGIN, DB_PASSWORD, DB_NAME);    // присоединяемся к БД
    $sql = "DELETE FROM `heroes` WHERE `id`='$id_base'";    // создаем sql запрос
    $connect->query($sql);    // Выполняем запрос
    $connect->close();
    header("Location: /PHP_lessons/lesson11/index1.php");
}

// создадим форму для ввода значений и отправки их в нашу БД

// Выводим через цикл на экран c по ключу.
// в данном случае ключ $k является номером массива в ассоциативном массиве $user
foreach ($user as $k => $v) {
    echo "<p>$v[id] | $v[name] | age: $v[age] | rank: $v[rank] <a href = '?change=$k'>Select</a></p>";
}
?>