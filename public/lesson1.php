<?php
// 1.


function brackets(string $str){
    $brackets = [
        '[' => ']',
        '{' => '}',
        '(' => ')',
    ];
    $count = 0;
    $stack =  new SplStack();

    foreach(str_split($str) as $liter){
        foreach($brackets as $key => $val){
            if($liter == $key){
                $stack->push($key);
                
            }

            if($liter == $val && $stack->isEmpty()){
                return "неверно";
            }

            if($liter == $val && $stack->top() <> $key){
                return "неверно";
                
            }

            if($liter == $val && $stack->top() == $key){
                $stack->pop();
                
            }
            if($liter == '"'){
                $count++;
            }
            
        }
    }
    if($stack->isEmpty() && $count % 2 == 0){
        return 'верно';
    }else{
        return 'неверно';
    }
}

echo brackets('[dfsf]sfsfs({kvdkvn}ncjdcbdjb)knc"djbv"djb');

// 2. Сам не догодался как реализовать такой алгоритм. Посмотрел готовые решения в интернете. 

// 3.
/*
$dir = $_GET['dir'] ? :__DIR__ . '/..';
$dirList = new DirectoryIterator($dir);
$directory = [];
$files = [];

foreach($dirList as $item){
    if($item->isDir()){
        if($item <> '.'){
            $directory["$item"] = $item->getPath();
        }
    }else{
        $files["$item"] = $item->getExtension();
    }
}

?>
<?foreach($directory as $key => $val):?>
    <a href="/lesson1.php?dir=<?=$val?>/<?=$key?>"><?=$key?></a>
    <p><?=$item?></p>
<?endforeach?>

<?foreach($files as $key => $val):?>
    <p><?=$key?> файл <?=$val?></p>
<?endforeach?>
*/