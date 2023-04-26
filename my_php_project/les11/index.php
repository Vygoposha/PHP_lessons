<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initail-scale=1.0">
    <title><?= "PHP IT Doctor! les11" ?></title> <!-- <?= "PHP IT Doctor!" ?> вывод одной строки через PHP -->
</head>

<body>
    <!--ООП: классы, объекты -->
    <?php
    require 'point.php'; // подключили класс из внешнего файла
    $point1 = new Point; // создали объект класса Point через ключ.слово new
    $point1->x = 12; //обращаемся к парамтру x - переменной класса Point, которой мы присваем свое значаение
    $point1->y = 2;
    echo $point1->x;


    $point2 = new Point; // создали объект класса Point через ключ.слово new
    $point2->x = 15; //обращаемся к парамтру x - переменной класса Point, которой мы присваем свое значаение
    $point2->y = 7;
    echo $point2->x;

    // unset($point2); //удаление объекта класса
    // echo $point2->x;
    ?>
    <hr>
    <?php
    echo Point::$num; // обращаемся к СТАТИЧЕСКОЙ переменной класса Point, не создавая экземпляр класса
    ?>
    <hr>
    <?php
    $f1 = $f2 = 3; // две переменный и у каждой своей значение
    $f1 = 2;
    echo $f1.' '.$f2;

    $n1 = 5;
    $n2 = &$n1; /* сслыка на $n1. При изменени одной из переменный будут менять обе, т.к. 
    по сути это одна и та же перемення */
    $n2 = 3;
    echo '<br>'.'n1 = '.$n1;

    //для объектов класса:
    $first = new Point;
    $first->x=100;
    $first->y=100;

    // $second = $first; //ссылка на объект, а не копия
    // $second ->x=5;
    // $second ->y=5;
    /*
    выведется x = 5, y = 5, потому что при изменении координат оюъекта $second изменились и $first, 
    т.к. $second является ссылкой на $first, а не новой объектом-копией*/
    echo "<br>x = $first->x, y = $first->y";
    // echo "<br>x = $second->x, y = $second->y";
    
    //создание копии объекта
    $third = clone $first; // создание нового объекта-копии через ключевое слово clone
    $third->x=10;
    $third->y=20;
    echo "<br>first - x = $first->x, y = $first->y"; //first - x = 100, y = 100
    echo "<br>third - x = $third->x, y = $third->y"; //third - x = 10, y = 20
    ?>

</body>

</html>