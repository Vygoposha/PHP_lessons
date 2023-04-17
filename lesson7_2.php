<?php
//Анонимные фунции
$arr = [10,20,30];
$average = function(array $arr){
    return array_sum($arr)/count($arr);
};

echo "среднее значение:". $average($arr)."<br>";

//Рекурсия функции
function factorial($x){
    if ($x === 0) return 1;
    return $x*factorial($x-1);
}

echo factorial(2);

?>