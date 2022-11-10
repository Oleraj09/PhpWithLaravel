<?php 
namespace App\classes;
class start
{
    public function __construct()
    {
        
    }
    public function go(){
        header('Location: action.php?pages=home');
    }
}