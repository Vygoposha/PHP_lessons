<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initail-scale=1.0">
    <title><?= "PHP IT Doctor! les4" ?></title> <!-- <?= "PHP IT Doctor!" ?> вывод одной строки через PHP -->
</head>

<body>

    <?php
    echo 'Главный скрип<br>';
        include 'second.php'; //в случае ошибки будет выводиться предупреждение
        // require 'second.php'; //в случае ошибки скрипт остановится
    echo 'Главный скрип<br>';
    ?>
</body>

</html>