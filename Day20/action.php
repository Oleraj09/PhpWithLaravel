<?php
require_once "vendor/autoload.php";
use App\classes\function1;
use App\classes\product;
use App\classes\menu;
if(isset($_GET['page'])){
    if($_GET['page']=='home'){
        $allproduct = new product();
        $myproducts = $allproduct->productdata();

        $allmenu = new menu();
        $menus = $allmenu->menu(); 
        include 'pages/testing.php';
        // include 'pages/home.php';
    }
    else{
        echo "Error! Page Doesn't matched.";
    }
}
else{
    echo "Page is empty";
}

?>
