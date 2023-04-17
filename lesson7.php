<?php
//Создание собсвтенных функций

function foo_sum($a,$b){ //можно задать значения по умолчанию foo_sum($a=10,$b=10)
    return $a+$b;
}

echo foo_sum(10,13),'<br>';

function foo_sum1($a,$b):int{ //можно задать тип возвразщаемых данных
    return $a+$b;
}

echo foo_sum1(10.7,13),'<br>';


function foo_sum2(int $a,int $b){ //можно задать тип для парамтеров функции
    return $a+$b;
}

echo foo_sum2(10,'12'),'<br>';

?>

<hr>
<?php
function foo_change($x){ //функция преобразования переменной
    $x.=' рублей';
    return $x;
}

$x = 150;
echo foo_change($x),'<br>';

//Чтобы изменять x глабально, а не локально в функции, нужно сделать жесткую ссылку на пееременную через &
function foo_change1(&$y){ 
    $y.=' рублей';
    return $y;
}

$y = 150;
foo_change1($y);
echo $y,'<br>';

//Можно использовать глобальную переменную внутри функции
$z = 135;
echo $z,'<br>';
function foo_change2(){ 
    global $z;
    $z.=' рублей';
    return $z;
}
foo_change2();
echo $z,'<br>';

?>

<hr>
<?php
//Обалсть видимости констант
define('login','iavygolo');
function show_login(){
    return login;
}

echo show_login(),'<br>';

//С использованием функции static
function foo_count(){
    static $count = 0;
    $count++;
    echo "счетчик: $count<br>";
}
foo_count();
foo_count();
foo_count();
