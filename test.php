<?php
function smash(array $words): string {
    $value = '';
    foreach ($words as $word){
        $value = $value.' '. "$word";
    }
    return $value;
  } 

print(smash(["hello", "world"]));
?>

<hr>
<?php
function feast($beast, $dish){
    $ar_beast = str_split($beast);
    $ar_dish = str_split($dish);
    return ($ar_beast[0] == $ar_dish[0]);
  }

$ar_beast = str_split("great blue heron");
$ar_dish = str_split("garlic naan");
echo ($ar_beast[0] == $ar_dish[0]);
  ?>
<hr>
<?php
function countsheep($num){
    $temp ='';
    for ($i=1; $i<=$num; $i++){
        $temp .= $i.' sheep...';
        }
        echo $temp;
    }
echo countsheep(3);
?>
<hr>
<?php
function quarterOf($month) {
if (1<=$month && $month<=3) {
    return 1;
}elseif (4<=$month && $month<=6){
    return 2;
}elseif (7<=$month && $month<=9){
    return 3;
}elseif (10<=$month && $month<=12){
    return 4;
}
  }


echo quarterOf(2);
echo quarterOf(6);
echo quarterOf(10);
?>

<?php
function descendingOrder(int $n): int {
  $sorted = '';
  $nToString = (string)$n;
  $nToArray = str_split($nToString);
  arsort($nToArray);
  foreach ($nToArray as $key => $value) {
    $sorted = $sorted.$value;
}return $sorted;
}
echo descendingOrder(1012);

// 194.58.112.174
?>