<?php
namespace App\classes;
class helloworld
{
    public $name;
    public $number;
    public $num1;
    public $num2;
    public $age;
    public $result;
    public function __construct()
    {
        
    }
    public function printing()
    {
        $this->age = 20;
        $this->num1 = 10;
        $this->num2 = 30;
        $this->result = $this->num2 % $this->num1;
        $this->number = 8801781886507;
        $this->name = "Oleraj Hossin ";
        $this->name .= "Mondol";
        $this->result = 40;
        $this->result .=20;
        echo "<br>";
        echo ($this->result);
        echo "<br>";
        echo ($this->name);
        echo "<br>";
        echo ($this->number);
        echo "<br>";
        // echo ($this->result);
        if(18 > $this->age){
            echo "I am Boy!";
        }
        elseif(18 <= $this->age && 30 >= $this->age){
            echo "I am young";
        }
        elseif(30 < $this->age && 50 >= $this->age){
            echo "I am wise";
        }
        else{
            echo "I am older";
        }
    }
    
    public function switchcase(){
        switch($this->age){
            case 10:
                echo " Baby";
                break;
            case 20:
                echo " Boy";
                break;
            case 30:
                echo " Man";
                break;
            default:
                echo " Executed!";
        }
    }
}