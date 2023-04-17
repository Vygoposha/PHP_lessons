<?php

define('CITY','Иркутск');
define('COLOR',['red','yellow','black']);
define('NAME','Игорь');
$age = 27;

$text = "Меня зовут ".NAME.", мне $age лет, я из города ".CITY." <br>";
echo $text.'<br>';

?>

<div>
    <p style=color:<?= COLOR[0] ?>> <?= $text ?> </p>
</div>