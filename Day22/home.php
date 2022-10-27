<?php
    namespace App\classes;

    class HelloWorld
    {
        public $massage;
        public $x, $y, $z, $item, $value, $value1;

        public $data=[];
        public $students=[];
        public function __construct()
        {
            $this->massage="Hello World";
        }
        public function index()
        {
            $this->students=[
                0=>[
                    'name'=>'Rubel',
                    'email'=>'rubel@gmail.com',
                    'mobile'=>[
                        'personal'=>'015646454',
                        'guardian'=>'015646454'
                    ]
                ],
                1=>[
                    'name'=>'Kamal',
                    'email'=>'kamal@gmail.com',
                    'mobile'=>[
                        'personal'=>'015646454',
                        'guardian'=>'015646454'
                    ]
                ],
                2=>[
                    'name'=>'Sohel',
                    'email'=>'sohel@gmail.com',
                    'mobile'=>[
                        'personal'=>'999994',
                        'guardian'=>'66664'
                    ]
                ],
                3=>[
                    'name'=>'Robin',
                    'email'=>'robin@gmail.com',
                    'mobile'=>[
                        'personal'=>'0666666454',
                        'guardian'=>'88888'
                    ],
                ],
                4=>[
                    'name'=>'jubayer'
                ]

            ];
            foreach ($this->students as $this->item)//4
            {
                if (is_array($this->item))
                {

                    foreach ($this->item as $this->value)//12
                    {
                        if (is_array($this->value))
                        {
                            foreach ($this->value as $datum)//8
                            {
                                echo $datum.', ';
                            }
                        }
                        else
                        {
                            echo $this->value.', ';
                        }
                    }
                }
                else{
                    echo $this->item;
                }
                echo '<br/>';
                echo '<br/>';
            }

            echo '<pre>';
            print_r($this->students);

            var_dump($this->students);

        }
    }
