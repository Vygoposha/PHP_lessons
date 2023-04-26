<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initail-scale=1.0">
    <title><?= "PHP IT Doctor!" ?></title> <!-- <?= "PHP IT Doctor!" ?> вывод одной строки через PHP -->
</head>

<body>
    <?php
        echo "Текущая дата и время<br>";
        echo date(DATE_RSS); # вывод текущей даты
    ?>
    <hr>
    <?php
    if(mt_rand(0,1)){ //в завистимости от результата динамически выводится красный или синий текст
        ?>
        <div style="color:blue">Blue text</div>
        <?php
    } else {
        ?>
        <div style="color:red">Red text</div>
        <?php
    }
    ?>
</body>

</html>