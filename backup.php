<?php

$string = "engr.tuhincse09@gmail.com";
$needle = '@';
$is_w_present = strpos($string,$needle);
if($is_w_present!==false){
    echo "{$needle} is present at {$is_w_present}";
}else{
    echo "{$needle} is not present"; 
}