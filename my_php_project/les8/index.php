<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initail-scale=1.0">
    <title><?= "PHP IT Doctor! les9" ?></title> <!-- <?= "PHP IT Doctor!" ?> вывод одной строки через PHP -->
</head>

<body>
    <?php
        $float = '5.13547';
        $num = (int)$float;
        $round = round($float, 2);
        echo $round.' '.gettype($round);
    ?>
</body>

</html>