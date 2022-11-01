<?php
namespace App\classes;
class function1
{   static $home = "Oleraj Hossin Mondol <br>";
    public static $name = "Hello It is me! <br>";
    public function __construct()
    {
        
    }
    public function folow(){
        self::triangle();
    }
    public static function triangle(){
        echo self::$name;
        echo self::$home;
    }
}

class function2 extends function1
{

}

