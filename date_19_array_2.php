<?php
// $original = "abcdefghijklmnopqrstuvwxyz1234567890";

// $parts = str_split($original);
// shuffle($parts);
// // print_r($parts);
// $key = join('',$parts);
// echo $key;

$original = "abcdefghijklmnopqrstuvwxyz1234567890";
$key = "hy74zg1pfaumxq5wk98i06jodtcelnr2bv3s"; // cat = 7hi
$parts = str_split($original);
shuffle($parts);
// print_r($parts);
$key = join('',$parts);
echo $key;