<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initail-scale=1.0">
    <title><?= "PHP IT Doctor! les20" ?></title> <!-- <?= "PHP IT Doctor!" ?> вывод одной строки через PHP -->
</head>

<body>
  <?php
  $lang = 'PHP';
  if (strtolower($lang) == 'php'){
    ?>
    <h1>Сегодня мы изучаеим PHP</h1>
    <?php
  }elseif(strtolower($lang) == 'js'){
    ?>
    <h1>Сегодня мы изучаеим JavaScript</h1>
    <?php
  }elseif(strtolower($lang) == 'c++'){
    ?>
    <h1>Сегодня мы изучаеим C++</h1>
    <?php
  }else{
    ?>
    <h1>Такого мы еще не знаем</h1>
    <?php
  }
  ?>

</body>

</html>