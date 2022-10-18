<?php
namespace App\classes;
class oleraj
{
    public $text;
    public function __construct(){
        $this->text = "Hi, I am oleraj";

    }
    public function printing(){
        echo $this->text;
        echo " ";
        for($i=1;$i<=10;$i++){
            if($i==10){
                echo $i;
            }
            else{
                echo $i.",";
            }
        }      
    }
    public function printing1(){
        echo "  ";
        $i=1;
        while($i<=10){
            echo $i." ";
            $i++;
        }
    }
    public function printing2(){
        echo "  ";
        $i=1;
        do{
            $i++;
            echo $i;
        }
        while($i < 1);
    }
}
