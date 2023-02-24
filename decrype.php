<?php
// $original = "abcdefghijklmnopqrstuvwxyz1234567890";
//
// $parts = str_split($original);
// shuffle($parts);
// // print_r($parts);
// $key = join('',$parts);
// echo $key;
// এই খান থেকে যে আউটপুট টা পাবো তা key তে বসাবো
?>
<?php

$original = "abcdefghijklmnopqrstuvwxyz1234567890";
     $key = "hy74zg1paumxq5wk98i06jodtcelnr2bv3s"; // cat = 7hi

$message = "a xwjz tw6 ih0pa";
// $message = strtolower($message); // dorkar nai eitar

$output = '';

for ($i=0;$i<strlen($message);$i++){
    // echo $message [$i];
    $character = $message[$i];
    $position = strpos($key,$character);
    if($position!==false){
        $replacement = $original[$position];
    }else{ 
        $replacement = $character;
    }
    // echo $character.$position."_";
   
    $output = $output . $replacement;

}

echo $output;