<?php
require_once "vendor/autoload.php";
use App\classes\function1;
use App\classes\arraylist;
use App\classes\product;
use App\classes\menulist;
if(isset($_GET['page'])){
    if($_GET['page']=='home'){
        // $student = new arraylist();
        // echo "<pre>";
        // $student->arraydata();
        // print_r($student->arraydata());
        // include 'pages/home.php';
        // include 'pages/secondary.php';
        // include 'pages/live.php';
        // include 'pages/register.php';
        $allproduct = new product();
        $myproducts = $allproduct->productdata();
        $allmenu = new menulist();
        $menus = $allmenu->menu(); 
        // echo "<pre>";
        // print_r($myproducts);
        include 'pages/xhome.php';
    }
    else{
        echo "Error! Page Doesn't matched.";
    }
}
else{
    echo "Page is empty";
}

?>