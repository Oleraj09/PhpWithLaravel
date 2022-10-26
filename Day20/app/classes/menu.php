<?php
namespace App\classes;
class menu
{
    public $menus=[];
    public function menu(){
        $emptyArray=array();
        $this->menus= [
            // ['name' =>[
            //     'Service 1',
            //     'Project 1',
            //     'Home Menu'
            // ]],
            // ['name' => [
            //     'Service 2', 
            //     'Project 2',
            //     'Dropdown 1'
            // ]],
            // ['name' => [
            //     'Service 3',
            //     'Project 3', 
            //     'Dropdown 2'
            // ]],
            // ['name' => [
            //     'Service 4',
            //     'Project 4', 
            //     'Blogger'
            // ]],
            // ['name' => [
            //     'Service 5',
            //     'Project 5', 
            //     'About'
            // ]],
            // ['name' => [
            //     'Service 6',
            //     'Project 6', 
            //     'Contact'
            // ]],
            // ['name' => [
            //     'Service 7',
            //     'Project 7', 
            //     'Login'
            // ]]
            [
                'name' =>
                [
                    'Home Menu'
                ]
            ],
            [
                'name' =>
                [
                    'Services',
                    [
                        'Service 1',
                        'Service 2',
                        'Service 3',
                        'Service 4'
                    ]
                ]
            ],
            [
                'name' =>
                [
                    'Projects',
                    [
                        'Project 1',
                        'Project 2',
                        'Project 3'
                    ]
                ]
            ],
            [
                'name' =>
                [
                    'Blogger'
                ]
            ],
            [
                'name' =>
                [
                    'About US'
                ]
            ],
            [
                'name' =>
                [
                    'Contact US'
                ]
            ],
            [
                'name' =>
                [
                    'Login'
                ]
            ]
        ];
        return $this->menus;
    }
    public function printing(){
        echo "Hello";
    }
}
