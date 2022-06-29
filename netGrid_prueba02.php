<?php 

$array = [1,9,2,0,5,3,1,0];
$array_final = [];
$tmp = [];
foreach($array as $key=>$value){
    // sort($array);
    
    if($value == 0 || $key == array_key_last($array)){
        // echo var_dump(array_key_exists($key-1,$array));
        if($value==0 && count($array) <= 1 || $value == 0 && $array[$key+1] == 0 ){
            array_push($array_final,' ');
            array_push($array_final,'X');
            array_push($array_final,' ');
        }
        if($key == array_key_last($array) && $value != 0){
            array_push($tmp,$value);
        }
        sort($tmp);
        foreach($tmp as $bloque){
            array_push($array_final,$bloque);
        }
        array_push($array_final,' ');
        $tmp = [];
        continue;
    }else{
        array_push($tmp,$value);
        if($array[$key+1] == 0){
            sort($tmp);
            foreach($tmp as $i){
                array_push($array_final,$i);
            }
            $tmp=[];
        }

    }
    
    // echo $value;
}

foreach($array_final as $number){
    echo $number;
}