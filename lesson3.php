<?php
$z = 10;
$z +=2; //$z = $z + 2;
$z -=2; //$z = $z - 2;
$z *=2; //$z = $z * 2;
$z /=2; //$z = $z / 2;
$z .='.rub'; //$z = $z. '.rub';

?>

<?php
$x = 10;
$x++; //x = x+1
$x--; 

$a = 5;
$b = 5;
echo ++$a, '<br>'; // ++ выведется значения 6
echo $b++, '<br>'; // выведется значаение 5
echo $b, '<br>'; // выведется значение 6

$str = 'A';
echo ++$str, '<br>';//Выведется следующая буква B из алфавита. По логике столбцов в эксель

?>
<hr>
<?php

$str = '33';
$int = 33;
echo ($str == $int), '<br>';
echo ($str === $int), '<br>';//строгое стравнение 
echo ($str != $int), '<br>';
echo ($str !== $int), '<br>';
?>
<hr>
<?php

$c = true;
$d = false;

echo !$d, '<br>';// логическое НЕ d это true - выведет 1
echo $c || $d, '<br>';// логическое ИЛИ. вывод 1. 1+0
echo $c && $d, '<br>';// логическое 1. Вывод 0. 1*0
echo $c xor $d, '<br>'; //ИСКЛЮЧАЮЩЕЕ ИЛИ. 1 если только один из операторов true

echo (!$c || $d) && ($c xor $d), '<br>'; 

?>
