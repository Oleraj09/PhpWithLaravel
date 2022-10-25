<?php
namespace App\classess;
class menulist
{
    public $menu = [];
    public function menus(){
        $this->menu=[
            [ 
                0 => ['Home']
            ],
            [
                0 => ['Blog']
            ],
            [
                0 => ['Service'=>['sub'=>'Item1']]
            ],
            [
                0 => ['Project']
            ],
            [
                0 => ['About']
            ],
            [
                0 => ['Contact']
            ]
        ];
        return $this->menu;
    }

}
