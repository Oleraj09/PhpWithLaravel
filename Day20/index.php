<?php
require_once "vendor/autoload.php";
use App\classess\functionx;
use App\classess\menulist;
$allmenu = new menulist();
$menuitem = $allmenu->menus();
// include 'pages/home.php';
// $fc = new functionx();
// echo $fc->printing();
$try = new functionx();
print_r($try->add(10));
echo "<br>";
print_r($try->rmv(90));
echo "<br>";
