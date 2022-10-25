<?php
namespace App\classess;
class functionx
{
    public $amount;
    public function __construct(){
        $this->amount=100;
    }
    public function add($addamount){
        echo $this->amount += $addamount;
    }
    public function rmv($ramount){
        echo $this->amount -= $ramount;
    }
}