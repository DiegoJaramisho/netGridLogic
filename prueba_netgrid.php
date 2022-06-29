<?php

$n = 0;
if($n == 0){
    echo 'ERROR';
}else{
    for($i = 0; $i<$n;$i++){

        for($j = 0;$j<$n;$j++){
            $imprimir[$i][$j] = '_';
        }
        $imprimir[$i][$n-$i-1] = 'X';
        $imprimir[$i][$i] = 'X';
    }
    
    for($i = 0; $i<$n;$i++){
    
        for($j = 0;$j<$n;$j++){
            echo $imprimir[$i][$j];
        }
        echo '<br>';
    }
}

