<?php
namespace App\classes;
class menulist
{
    public $menus=[];
    public function menu(){
        $this->menus=[
            [ 
                'name' => 'Home'
            ],
            [
                'name' => 'Blog'
            ],
            [
                'name' => 'Service'
            ],
            [
                'name' => 'Project'
            ],
            [
                'name' => 'About'
            ],
            [
                'name' => 'Contact'
            ]
        ];
        return $this->menus;
    }
}