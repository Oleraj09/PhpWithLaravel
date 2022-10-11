<?php


namespace App\classes;


class helloworld
{
    public $text;

    public function __construct()
    {
        $this->text = "Hello World!!";
    }
    public function printing()
    {
        echo $this->text;
//        echo '<h1>Return</h1>';
    }
}