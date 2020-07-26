<?php
include 'Array.php';
$array = (new ArrayNum())->randArray();

function searchReplay($array){
    $start = 0;
    $end = count($array) - 1;
    $base = $start + 1;
    if($array[$start] == $array[$end]){
        $replay[$array[$start]] = $end + 1;
        return $replay;
    }

    while($start < $end){
        if($array[$start] == $array[$base]){
            $replay[$array[$start]] = $base - $start + 1;
            $base++;
        }else{
            $start = $base;
            $base++;
        }
       
    }
    return $replay;
}

$time = microtime(1);
searchReplay($array);
$myTime = microtime(1) - $time;

$time = microtime(1);
array_count_values($array);
echo 'Мой метод ' . $myTime.PHP_EOL;
echo 'PHP метод ' . (microtime(1) - $time);