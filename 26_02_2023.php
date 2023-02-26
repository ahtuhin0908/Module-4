<?php

class Product{



    //constrctor
    function __construct($name){
        echo "$name";

    }

    public function ProductCategoryList(){ // public, private, protected, static
        $categoryList=array('A','B','C');
        print_r($categoryList);

    }

}

$obj=new Product( name:"Oslad");

$obj->ProductCategoryList();