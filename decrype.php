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
     $key = "hy74zg1pfaumxq5wk98i06jodtcelnr2bv3s"; // cat = 7hi

$message = "pzmm5 xd g9fzq4. 7p5m5 uph5dh 4h5dh u59f.";
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