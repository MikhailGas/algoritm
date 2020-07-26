<?php
class ArrayNum{
    public $num = 77777;
    public $max = 1000000;

    public function getArray(){
        echo $this->NUM;
        for($i = 1; $i <= $this->max; $i++){
            
            if($i != $this->num){
               $array[] = $i; 
            }
            
        }
        return $array;
    }   

    public function randArray(){
        $array = [];
        for($i = 0; $i <= $this->max; $i++){
            $array[] = random_int(0, $this->max);
        }
        sort($array);
        return $array;
    }
}






