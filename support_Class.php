<?php
// $fn ="Akter";
// $ln ="Hossain";

// $string = " Hello World ";

// // echo strlen($string);
// // echo $string[6];
// $clean_string = trim($string);
// echo strlen($clean_string);

$person = ['Akter','Hossain','Tuhin'];
$search = "hossain";
// $parts = str_split($person);

$person = strtolower($person);

// if $person[2]{
if (in_array("{$search}",$person)){
    echo ("{$search} is Available");
}else{
    echo ("{$search} is not Available");
}
