<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$date=array();
//Заполняем массив случайными числами:
for ($i = 0; $i < 5; $i++){
    mt_srand(time());
    $date[$i]=rand(1,time());
}

// Выводим содержимое массива: 
print_r($date); 
echo "<br />";

//наименьший день
$mind= min($date);
echo 'Наименьший день'.' '.$mind=date('d');
echo "<br />";

//наибольший месяц
$maxm= max($date);
echo 'Наибольший месяц'.' '.$maxm=date('m');
echo "<br />";

//Сортировка массива по возрастанию дат
array_multisort($date);
echo 'Сортировка массива по возрастанию дат';
echo "<br />";
print_r($date); 
echo "<br />";

$selected=array_slice($date,-1, 1); 
echo 'Последний элемент массива'.' ';
print_r($selected);
echo "<br />";

echo $selected=date('d.m.Y H:i:s') ;
echo "<br />";

date_default_timezone_set('America/New_York');
echo 'Часовой пояс для Нью-Йорка'.' ';
echo $selected=date('d.m.Y H:i:s') ;

?>

