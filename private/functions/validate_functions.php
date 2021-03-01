<?php

//*Validate value has string length
//leading and trailing space will count
//$option: exact , max , min
//has_length($string , ['exact'=>20]);
//has_length($string , ['min'=>5 , 'max'=>100]);
function has_length($value , $options =[]){
    if(isset($options['max']) && (strlen($value) > (int)$options['max'])){
        return false;
    }
    if(isset($options['min']) && (strlen($value) < (int)$options['min'])){
        return false;
    }
    if(isset($options['exact']) && (strlen($value) !== (int)$options['exact'])){
        return false;
    }
    return true;
}

?>