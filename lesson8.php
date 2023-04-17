<h2>Функции работы с датой и временем</h2>
<?php
echo time(), '<br>'; //выведет кол-во секунд с момента создания перых Unix систем. с 1 января 1970 по текущую дату
$date_96 = mktime(4, 12, 12, 1, 28, 1996); //вернет timestamp метку - кол-во(секунд) с 1 января 1970 по указанное время

echo '<br>', date('h:i:s d.m.y'), '<br>'; //вывод текущей даты в указанном формате
echo '<br>', date('h:i:s d.m.y', $date_96), '<br>';
//в функцию можно передавать timestamp метку из mktime(т.е. вывести любую указанную дату)
$day = floor((time() - $date_96) / 60 / 60 / 24);
echo '<br>';
echo "C 28 января 1996 года прошло $day дней<br>";

//можно получать timestamp метку в нижеуказанном формате
echo strtotime('now');
echo '<br>';
echo strtotime('+ 1 week');
echo '<br>';
echo strtotime('29 June 2009'), '<br>';

$date_m = strtotime('next Friday');
echo "Следующая пятницу будет ", date('d-m-Y', $date_m);

?>