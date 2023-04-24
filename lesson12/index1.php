<?
$file = "data.txt";

// // доступ к файлам через функцию file_get_contents
// $str = file_get_contents($file);
// // file_put_contents($file,'Кукуха');// запись в файл с полной перезаписью всего содержимого
// // file_put_contents($file,$str.", Трисс");// дозапись через конкатенацию
// file_put_contents($file,", Йенефер", FILE_APPEND);// используем флаг, чтобы положить словов в конеце строки
// echo $str;

// чтение данные из файла через массив. Построчная запись
// $arr = file('num.txt');
// print_r($arr);
// Запись данных в файл через массив построчно
// $arr = [14,2,32,4,51];
// file_put_contents('arr.txt', implode(PHP_EOL,$arr));//PHP_EOL - разделить


//копирование, переименование, удаление файла
// copy('data.txt', 'data2.txt');//имя копируемого файла, имя нового файла
// rename('data2.txt', 'alien.txt');//переименование
// unlink('alien.txt');//удаление файла

// $size = filesize('../lesson11/post_and_get.php')/1024;
// echo $size.' Килобайт';

// //существует файл или нет. 1 или пустота
// echo file_exists('../lesson11/post_and_g1et.php');
?>