<?php
require_once "vendor/autoload.php";
use App\classes\element;
$object= new element();
$object->arry();
$object->printing();

$i=0;
for($i=1;$i<=10;$i++){
    echo $i.' ';
    if($i%2==0){
        echo "\n";
    }
}

function one($a, $b){
    echo "Last Finishing \n";
    $sum=$a+$b;
    echo $sum;
}
one(1,5);

//Recursion type function call
function two($a){
    echo "\n";
    if($a > 10)
        return;
    echo $a;
    $a++;
    two($a);
}
two(1);

function sum($a,$b,...$number){
    $sumab=$a+$b;
    echo $sumab;
}   
sum(1,2,3,4,5,6);