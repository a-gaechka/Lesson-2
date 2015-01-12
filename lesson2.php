<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$date=array();
for ($i = 0; $i < 5; $i++){
    mt_srand(time());
    $date[$i]=rand(1,time());
}

$mind=array();
for($i = 0; $i < 5; $i++){
    $mind[$i]=date('d', $date[$i]);
}
$minday=min($mind);
echo 'Наименьший день'.' '.$minday;
echo "<br />";


$maxm=array();
for($i = 0; $i < 5; $i++){
    $maxm[$i]=date('m', $date[$i]);
}
$maxm=max($mind);
echo 'Наибольший месяц'.' '.$maxm;
echo "<br />";

array_multisort($date);
$selected=array_slice($date,-1, 1); 
echo "<br />";

echo $selected=date('d.m.Y H:i:s') ;
echo "<br />";

date_default_timezone_set('America/New_York');
echo 'Часовой пояс для Нью-Йорка'.' ';
echo $selected=date('d.m.Y H:i:s') ;

?>

