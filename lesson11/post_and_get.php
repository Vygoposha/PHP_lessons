
<?php

    define('SERVERNAME', 'localhost');
    define('DB_NAME','new_db');
    define('DB_LOGIN','admin');
    define('DB_PASSWORD','admin');
    $name=$email=$message='';


$connect = new mysqli(SERVERNAME, DB_LOGIN, DB_PASSWORD, DB_NAME);
$sql = "SELECT * FROM `users`";
$result = $connect->query($sql);
for ($user = array(); $row = $result->fetch_assoc(); $user[] = $row);
$connect->close();

$last = count($user)-1;//Кол-во эл-ов в массиве -1, чтобы узнать id, т.к. нумерация с 0
$last_id = $user[$last]['id']+1;//Номер id для нового эл-та в массиве

if(isset($_GET['change'])){
    $id = $_GET['change']??'';
    $name = $user[$id]['name'];
    $email = $user[$id]['email'];
    $message = $user[$id]['message'];
    $id_base=$user[$id]['id']??'';
}

if(isset($_POST['clear'])){
    
    header("Location: /PHP_lessons/lesson11/post_and_get.php");
}

?>
<form name="feedback" method="POST" action="#">
    <label>Ваше имя <input type="text" name="name" placeholder="Иван" value="<?=$name?>"></label><hr>
    <label>Ваш email <input type="text" name="email" placeholder="ivan@mail.ru" value="<?=$email?>"></label><hr>
    <label>Сообщение <textarea name="message" placeholder="Введите ваш запрос"><?=$message?></textarea></label><hr>
    <input type="submit" name="send" value="Отправить">
    <input type="submit" name="clear" value="Очистить">
    <?php if(isset($_GET['change'])): ?>
    <input type="submit" name="edit" value="Изменить">
    <input type="submit" name="delete" value="Удалить">    
    <? endif; ?>
</form>
<?

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $connect = new mysqli (SERVERNAME,DB_LOGIN, DB_PASSWORD, DB_NAME);
        $sql = "INSERT INTO `users`(`id`,`name`, `email`, `message`) VALUES ('$last_id','$name','$email','$message')";
        $connect->query($sql);
        $connect->close();
        header("Location: /PHP_lessons/lesson11/post_and_get.php");
    }   

    if(isset($_POST['edit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $connect = new mysqli (SERVERNAME,DB_LOGIN, DB_PASSWORD, DB_NAME);
        $sql = "UPDATE `users` SET `name`='$name',`email`='$email',`message`='$message]' WHERE `id` =  '$id_base'";
        $connect->query($sql);
        $connect->close();
        header("Location: /PHP_lessons/lesson11/post_and_get.php");
    }   
    if(isset($_POST['delete'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $connect = new mysqli (SERVERNAME,DB_LOGIN, DB_PASSWORD, DB_NAME);
        $sql = "DELETE FROM `users` WHERE `id` =  '$id_base'";
        $connect->query($sql);
        $connect->close();
        header("Location: /PHP_lessons/lesson11/post_and_get.php");
    }   





    foreach ($user as $k => $v) {
        echo "<p>$v[id] | $v[name] | email: $v[email] | message: $v[message] <a href = '?change=$k'>Select</a></p>";
    }
?>
