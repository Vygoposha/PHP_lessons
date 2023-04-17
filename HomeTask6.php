<?php /*
 sort
 asort
 array_merge - слияние массива без сохр ключ-значение
 array_sum   - сумма эл массива
 array_unique- удаляет повторы
 count       - количество элементов массива
 range       - создание массива по параметрам
 explode     - преобразует строку в массив
 implode     - преобразует массив в строку
 
 
 //PHP.net Расширения, относящиеся к переменным и типам -> функции для работы с массивом
 
1.
$arr = [
    ['name'=>'iphon','price'=>30000],
    ['name'=>'macbook','price'=>130000],
    ['name'=>'macpro','price'=>430000]
];
-Увеличить стоимость товара на 30%
-Вывести весь товар: цена iphone = 39000р.; (с помощью цикла foreach)
 
 2.Создать массив со значениями от 1 до 100 (используя функцию), найти сумму чисел
 3.Создать массив со значениями от (a-z) и соединить их в строку)
 */
?>
<h3>Task 1</h3>
 <?php
 //1 task
$arr = [
    ['name'=>'iphone','price'=>30000],
    ['name'=>'macbook','price'=>130000],
    ['name'=>'macpro','price'=>430000]
];
foreach ($arr as $key=>$value){
    foreach ($value as $v){
        if (is_string($v)){
        echo "цена $v";
        }else{
            $v *= 1.3;
            echo " = $v руб.",'<br>';
        }

    }
}

 ?>
<h3>Task 2</h3>
<?php
 //2 task
$arr = range(1,100,1);
echo $sum_array = array_sum($arr);

 ?>

<h3>Task 3</h3>

<?php
$arr = range('a','z');
$arr_to_str = implode('',$arr);
echo $arr_to_str;

?>