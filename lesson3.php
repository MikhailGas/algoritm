<?php
include 'Array.php';

$array = (new ArrayNum())->getArray();

function searchNum($array){
    $start = 0;
    $end = count($array) - 1;
    
    //print_r($array);
    
    while ($start < $end){
        $base = floor(($start + $end) / 2);
        if($array[$base - 1] - ($base - 1) == 1 && $array[$base] - $base == 2){
            return $base + 1;
            
        }elseif($array[$base] - $base == 2){
            $end = $base;
            
        }else{
            $start = $base;
            
        }
    }
    return 'Hello';
}

$time = microtime(1);
echo(searchNum($array)).PHP_EOL;
echo (microtime(1) - $time).PHP_EOL;


