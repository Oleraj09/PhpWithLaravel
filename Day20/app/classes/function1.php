<?php
namespace App\classes;
class function1
{
    public function __construct()
    {
        echo "Hello World";
    }
    public function redirect(){       
        header('Location: action.php?page=home');
    }
}
?>