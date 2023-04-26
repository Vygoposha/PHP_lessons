<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initail-scale=1.0">
    <title><?= "PHP IT Doctor! les12" ?></title> <!-- <?= "PHP IT Doctor!" ?> вывод одной строки через PHP -->
</head>

<body>
  <?php
  require '../les11/point.php'; //подключаем класс из другйо папки
  $p1 = new Point;
  $p1 -> x=10;
  $p1 -> y=34;
  
  $p2 = new Point;
  $p2 -> x=3;
  $p2 -> y=10;

  $MM = sqrt(pow(($p2 -> x-$p1 -> x),2)+pow($p2 -> y-$p1 -> y,2));
  echo $MM;
  ?>  

</body>

</html>