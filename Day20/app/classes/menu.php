<?php
namespace App\classes;
class menu
{
    public $menus=[];
    public function menu(){
        $this->menus= [
            ['name' =>[
                'Service 1',
                'Project 1',
                'Home Menu'
            ]],
            ['name' => [
                'Service 2', 
                'Project 2',
                'Dropdown 1'
            ]],
            ['name' => [
                'Service 3',
                'Project 3', 
                'Dropdown 2'
            ]],
            ['name' => [
                'Service 4',
                'Project 4', 
                'Blogger'
            ]],
            ['name' => [
                'Service 5',
                'Project 5', 
                'About'
            ]],
            ['name' => [
                'Service 6',
                'Project 6', 
                'Contact'
            ]],
            ['name' => [
                'Service 7',
                'Project 7', 
                'Login'
            ]],
            ['name' => [
                'Service 8',
                NULL,
                NULL
            ]]
        ];
        return $this->menus;
    }
    public function printing(){
        echo "Hello";
    }
}