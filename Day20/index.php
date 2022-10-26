<?php
require_once "vendor/autoload.php";
use App\classes\function1;
use App\classes\menu;

$index_obj = new function1();
$index_obj->redirect();
$idx = new menu();
echo "<pre>";
print_r($idx->menu());
