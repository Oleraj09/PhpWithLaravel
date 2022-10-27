<?php
namespace App\classes;
class function1
{
    private $name;
    public function __construct(){
        
    }
    public function redirect(){
        echo "This is test";
    }
    public function __get($name)
    {
        $this->$name;
    }
}
?>