<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initail-scale=1.0">
    <title><?= "PHP IT Doctor! les12" ?></title> <!-- <?= "PHP IT Doctor!" ?> вывод одной строки через PHP -->
</head>

<body>
  <?php
    if(define('NUMBER',2)){ // создание константы
        echo 'Константа создана<br>';
    }
    if(defined('NUMBER')){ //проверка существует ли константа
        echo 'Константа уже существует<br>';
    }

    $num = mt_rand(1,10); // генерация случайного числа от 1 до 10
    $name = "VALUE($num)"; //
    define($name,$num);
    echo $name.'<br>';
    echo constant($name); // функция вывод константы, при динамическом формировании ее имени

  ?>  
  <hr>
  <!-- Константы класса --><br>
  <?php
    class ConstClass {
        const NAME = "str"; // создание константы в классе
    }
    if(defined('ConstClass::NAME')){ // константа как статические переменные класса. Можно получить через ::, но нельзя черезе ->
        echo 'Конатсанта опредлена';
    }else{
        echo 'Конатсанта не опредлена';
    }
  ?>

</body>

</html>