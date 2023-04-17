<?php
//cycle FOR

for($i=0; $i<=10; $i++){  //можно прибавлять/умножать
    echo $i,'<br>';
}

?>
<hr>
<?php

for($i=0; $i<=10; $i++){  //можно прибавлять/умножать
    if($i==5)continue;
    echo $i,'<br>';
}

?>
<hr>
<?php

for($i=0; $i<=10; $i++){  //можно прибавлять/умножать
    if($i==5)break;
    echo $i,'<br>';
}

?>

<hr>
<?php
for($k=1; $k<=5; $k++){
    for($i=0; $i<=10; $i++){  //можно прибавлять/умножать
        if($i==5)break;
        echo $i,'<br>';
    }
    echo '<hr>';
}
?>


<?php
$k = 0;
for($i=0; $i<=100; $i++){ 
    $k = $k + $i; // $k += $i;
}
echo $k;

?>

<?php
$k = 0;
for($i=0; $i<=100; $i++): $k += $i;
endfor;
echo $k;

?>
<hr>
<?php 
// cycle WHILE
$k = 0;
while ($k <= 5){
    $i = 0;
    while ($i <= 4){
        echo $i;
        $i++;
    }
    
    $k++;
}
?>

<hr>
<?php 
// cycle DO WHILE
$i = 0;
do{
    $i++;
    echo $i,'<br>';
}
while($i<=9);

?>
<hr>
<?php
//cycle FOREACH
$week =[1=>"пн","вт","ср","чт","пт","сб","вс"];
foreach ($week as $key=>$day){
    echo "$key:$day<br>";
}

?>

<hr>
<?php
$console = [
    0=>['name'=>'xbox', 'price'=>45590], 1=>['name'=>'PS5', 'price'=>49990]
];

foreach($console as $value){
    echo "консоль - $value[name], цена - $value[price]<br>";
}


?>