<?php
$catagory=array('Akter','Hossain','Tuhin','Nurunnahar','Tanjina','Khairuzzaman','Tushar');

// echo $catagory[5];

foreach ($catagory as $item){
    echo "$item<br>";
}
?>


echo <br>
  

<?php

// PHP Associative Array


$signup = array(
    "Email"=>"engr.tuhincse09@gmail.com",
    "Password"=>"123245",
    "Fname"=>"Akter",
    "Lname"=>"Hossain",
    "Age"=>"23",
    "City"=>"Cumilla",
);

// echo $signup["Password"];

// foreach ($signup as $property=>$value){
//     echo "$value<br>";
// }

echo $signup["Email"];

?>


echo <br>

<?php

//PHP Multidimentional Array. multidimentional Array mane ekta array te onek gulo bacca array mane array er pete  array....hahaha

$productList=array(
    array('Mobile1','10,000','Redmi'),
    array('Mobile2','15,000','Samsung'),
    array('Mobile3','160,000','Iphone'),
    array('Mobile4','20,000','Realme'),
    array('Mobile5','30,000','Poco'),
    array('Mobile6','100,000','Motorola'),
);

// echo $productList[5][2];

// For Each Loop Over PHP Multidimentional Array

foreach ($productList as $eachProduct){   // onek gulo product er bitor theke ekta product ber kore niye aschi like mobile1 ber kore niye asci

    foreach ($eachProduct as $eachProperty){  //oi ekta product theke ekta item ber kore anbo

        echo "$eachProperty";
    }
}

?>
echo <br>
<?php
//count array

$Product = array('Akter','23','Cumilla');

echo count($Product);
    ?>

echo <br>


<?php
// array reverse

$bio = array('Tuhin','23','Dhaka');

var_dump (array_reverse($bio));
?>

echo <br>

<!-- <?php
//array search 

$city=array("Dhaka","Cumilla","Rajshahi");

$key=array_search( "Cumilla",$city);

echo $key;
?> -->

<?php
$city=array(
    "Dhaka",
    "Rajshahi",
    "Rangpur",
    "Khulna",
    "Cumilla",
);

$key=array_search("Cumilla",$city);
echo $key;


