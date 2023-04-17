<?php

$month = [1=>'Январь', "Февраль", "Март", "Апрель"];

echo $month['4'];//просмотр по ключу
$month ['5']='Май';//добавление по ключу
$month []='Июнь';//добавление в конец массива

echo '<pre>';
print_r($month);
echo '</pre>';

unset($month['4']);//unset удаляет переменную или значение в массиве
echo '<pre>';
print_r($month);
echo '</pre>';

?>


<hr>
<?php
$num = [12,4,3,5,12,1,3,16];

foreach ($num as $key=>$int){
    echo "$key:$int<br>";
}
echo '<hr>';
sort($num);//функция sort() - сортировка массива по возрастанию
foreach ($num as $key=>$int){
    echo "$key:$int<br>";
}echo'<hr>';

$num2 = array_unique($num);//исключение из массива дублирующихся элементов
foreach ($num2 as $key=>$int){
    echo "$key:$int<br>";
}
?>


<hr>
<?php
$num = [12,4,3,5,12,1,3,16];
echo "Sum of array:". array_sum($num)."<br>";//сумма эл-тов массива
echo "Произведение:". array_product($num)."<br>";
echo "Кол-во элементов в массиве:". count($num)."<br>";

echo in_array('5',$num);//проверяет наличие элемента в массиве. Вывод: true/false
?>


<hr>
<?php
echo "<pre>";
print_r(array_chunk($num,2)); //Разбивает массив на подмассивы по 2 элемента. Не меняет исходный массив
echo '<hr>';
print_r(array_slice($num,0,3)); //Вырезает эл-ты из массива по индексу с 0 по 3. Не меняет исходный массив
echo '<hr>';
print_r(array_splice($num,0,3,['a','b','c'])); //Заменяет эл-ты из массива по индексу с 0 по 3. МЕНЯЕТ исходный массив
?>


<?php
//ассоциативные массивы
$fruits = ['apple'=>10,'bannana'=>15,'kiwi'=>25, 'mango'=>11];
asort($fruits);//сортировка для ассоцмативных массивов без замены ключа
foreach($fruits as $fruit=>$num){
    if ($num>11) {//условие внутри цикла
    echo $fruit." количество:".$num.'шт.<br>';
    }
}
?>


<hr>
<?php
$food =[
    'fruits' => ['apple','banana','oragne'],
    'vegies' => ['tomato','cucumber','carrot'],
];
echo $food['fruits'][2],'<br>';//вывод элемента двумерных массивов
echo count($food,1),'<br>';//посчет кол-ва элементов в двмерном массиве. исполькуется ключ "1"

foreach ($food as $k=>$v){//вывод двумерного массива целиком в паре ключ-значение
    echo $k,'<br>';
    foreach ($v as $key=>$value){
        echo "$key:$value<br>";
    }
}

?>


<hr>
<?php
$arr1 = range(1,5);
$arr2 = range(1,10,2);//создание массива с эл-ми от 1 до 10 с шагом 2

foreach ($arr1 as $value){
    echo $value,' ';
}
echo '<br>';
foreach ($arr2 as $value){
    echo $value,' ';
}
//слияние массивов
$sum_array = array_merge($arr1,$arr2);
echo '<br>';
foreach ($sum_array as $array){
    echo $array,' ';
}
//Функция поиска пересечений в массивах
print_r(array_intersect($arr1,$arr2));//происходит поиск пересечений первого массива со вторым
//Функция поиска различий между первым и вторым массивом, а не наоборот
print_r(array_diff($arr1,$arr2));
?>


<hr>
<?php
//Преобразование массива
$str = 'пн вт ср чт пт сб вс';
echo $str;
$arr = explode(' ',$str);//Перобразование из сроки в массив по разделителю ' ', по пробелу
echo '<br>';
print_r($arr);

$color = ['red','blue','yellow'];
$str = implode('|',$color);//Перобразование из массива в строку с раделителем |
echo $str,'<br>';
list($red,$blue,$yellow)=$color;//присвоение переменным значений из массива
echo $blue;
?>