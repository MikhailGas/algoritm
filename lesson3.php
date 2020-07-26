<?php
include 'Array.php';

/*$array = (new ArrayNum())->getArray();

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
*/
$array = (new ArrayNum())->randArray();
$replay;
function searchReplay($array){
    //print_r($array);
    while(count($array)){
        
        $array = searchBinary($array);
    
    }
}

function searchBinary($array){
    $start = 0;
    $end = count($array) - 1;
    $item = $array[0];
    global $replay;

    while ($start <= $end){
        $base = floor(($start + $end) / 2);
        if($array[$base] == $item){
            $replay[$array[$base]]++;
                                            
            unset($array[$base]);
            $array = array_values($array);
            return $array;
        }
        elseif ($array[$base] < $item){
            $start = $base + 1;
        }
		else{
            $end = $base - 1;
        }
			

    }       
    unset($array[0]);
    array_values($array);
    return $array;
}
    


$time = microtime(1);
searchReplay($array);
print_r($replay);
$timeMy = microtime(1) - $time;


$time = microtime(1);
print_r(array_count_values($array));
echo 'Мой метод ' . ($timeMy).PHP_EOL;
echo 'PHP метод ' . (microtime(1) - $time);
