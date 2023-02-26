<?php
// php string

// syntex. variables, fuction, string, array, math, date & time and  basic OB 
$first_name= "John";
$last_name= "Doe";

// $string = "Hello {$first_name}{$last_name}"; 
// string Interpolation - যদি কোন কোডে ডাবল কোড ইউজ করা হয় তখন সেখানে স্ট্রিং ইন্টারফোলেশন হবে।

$string =<<<EOD

HEllo Mr {$first_name}
{$last_name}
EOD;  // this is heredoc syntx
// ডাবল কোটেশান ছাড়া ও লিখা যাবে like EOD  বা যেকোন নাম দেওয়া যেতে পারে  like tuhin, abcd, jdjd. আবার সিঙ্গেল কোটেশান দিলে nowdoc হয়ে যাবে।


echo $string; 
?>

echo <br>

<?php
$fn="Akter";
$ln="Hossain";

$string = " Hello World ";


// echo strlen($string); koyta word ace ta dekhar jonno
// echo $string[6];  // word khuje ber korar jonno
$clean_string = trim($string); // eita variable er bam and dan pashe theke spane and non printable charecter pele dibe jegula print hobe na arki.
echo strlen ($clean_string);



$persons = ['Akter','Hossain','Tuhin'];

// echo $persons[1];

?>



<?php
echo str_repeat('*',50);
echo "<br>\n";

$string = "Southeast University";

$string [9]="_"; // Replace array
echo $string;

echo "<br>\n";

// একটা string এর মধ্যে আরেকটা string আছে কিনা তা কীভাবে দেখব...

$string = "engr.tuhincse09@gmail.com"; // haystack= এর মানে হচ্ছে খরের গাদা and needle= ের মানে শুজ। heystack এর মধ্যে neddle খুঁজবো 
// $is_w_present = strpos($string,'i');
// echo $is_w_present; // কত নাম্বা পজিশনে আছে তা জানাবে
$needle = '@';
$is_w_present = strpos($string,$needle);
if($is_w_present!==false){ // strpose use করলে এই formate টা use করবো 
    echo "{$needle} is present at {$is_w_present}";
}else{
    echo "{$needle} is not present"; 
} // এর মানে হচ্ছে $string  এ কোন word টা আছে তা খুঁজা 

// একটা string এর ভিতর আরেকটা string replace কীভাবে করবো, আর একয়াত string এর মধ্যে একটা পার্টিকুলার অংশে কি আছে সেটা খুজে বের করবো,। আমাদের বড় একটি string ache er মধ্যে এত টুকুউউউ জায়গায় কি আছে তা খুজে বের করবো অর্থাৎ ৫ থে ১০ পর্য কি আছে তা আরকি। 
//এর জন্য কমন Funtion use করা হয় subtr অর্থাৎ subtring 

$string = "Hello World";
// echo substr($string,6,3);

?>

<?php

$fruits = 'Mango Banana Apple Orange Grape';
$fruits_array = explode(' ',$fruits);
// echo$fruits_array[1];
// print_r($fruits_array);
// var_dump($fruits_array);
// echo count ($fruits_array);
$fruits_again = implode('_',$fruits_array); // '_' ' ' যেটা দিয়ে ভাঙতেছি যেটা দিয়ে জোড়া দিচ্ছি এইটাই হচ্ছে ডেইলি মিটার Delimeter
// echo $fruits_again; 

// $string = 'A_E_I_O_U'; //vowels
// $array = explode('_',$string);
// print_r($array);

$string = 'AEIOU'; 
$array = str_split($string);
// print_r($array);
// echo join ('...',$array); // ellipsis
echo implode ('...',$array);

//replacement
$string = 'AEIOU';
$find ="IO";
$replace = "io";

$new_string = str_replace($find,$replace,$string);
echo $new_string;
?>

<?php
$original = "abcdefghijklmnopqrstuvwxyz1234567890";
$key = "hy74zg1pfaumxq5wk98i06jodtcelnr2bv3s"; // cat = 7hi
$parts = str_split($original);
shuffle($parts);
// print_r($parts);
$key = join('',$parts);
echo $key;