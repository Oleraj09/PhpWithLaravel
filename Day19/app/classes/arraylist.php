<?php
namespace App\classes;
class arraylist
{
    public $listdata=[];
    public function arraydata(){
        $this->listdata=[
            '0' => [
                'name' => 'Enjamul Haque',
                'occupation' => 'Student',
                'institute' => 'BUBT',
                'semister' => '11th',
                'email' => 'Olerajhossin@gmail.com',
                'phone' => '01781886507'
            ],
            '1' => [
                'name' => 'Enjamul Haque',
                'occupation' => 'Student',
                'institute' => 'BUBT',
                'semister' => '12th',
                'email' => 'Olerajmondol@gmail.com',
                'phone' => '01781886509'
            ],
            '2' => [
                'name' => 'Enjamul Haque',
                'occupation' => 'Student',
                'institute' => 'BUBT',
                'semister' => '11th',
                'email' => 'enjamul@gmail.com',
                'phone' => '01781886545'
            ]
        ];
        return $this->listdata;
    }
}