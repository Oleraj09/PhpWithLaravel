<?php
namespace App\classes;
class product
{
    public $products=[];
    public function productdata(){
        $this->products=[
            [
                'id' => '1',
                'image' => 'https://images.unsplash.com/photo-1618424181497-157f25b6ddd5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8bGFwdG9wJTIwY29tcHV0ZXJ8ZW58MHx8MHx8&w=1000&q=80',
                'title' => 'DELL 123XcT PRO',
                'price' => '65000 Taka',
                'desc' => 'A PRO serice of DELL Laptop. Best Productive Laptop.'
            ],
            [
                'id' => '2',
                'image' => 'https://images.unsplash.com/photo-1618424181497-157f25b6ddd5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8bGFwdG9wJTIwY29tcHV0ZXJ8ZW58MHx8MHx8&w=1000&q=80',
                'title' => 'DELL 423XcT PRO',
                'price' => '75000 Taka',
                'desc' => 'A PRO serice of DELL Laptop. Best Gaming Laptop.'
            ],
            [
                'id' => '3',
                'image' => 'https://images.unsplash.com/photo-1618424181497-157f25b6ddd5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8bGFwdG9wJTIwY29tcHV0ZXJ8ZW58MHx8MHx8&w=1000&q=80',
                'title' => 'DELL 233XcT PRO',
                'price' => '95000 Taka',
                'desc' => 'A PRO serice of DELL Laptop. Best Gaming cool Laptop.'
            ],
            [
                'id' => '4',
                'image' => 'https://images.unsplash.com/photo-1618424181497-157f25b6ddd5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8bGFwdG9wJTIwY29tcHV0ZXJ8ZW58MHx8MHx8&w=1000&q=80',
                'title' => 'DELL 933XcT PRO',
                'price' => '5000 Taka',
                'desc' => 'A PRO serice of DELL Laptop. Normal use Laptop.'
            ]
        ];
        return $this->products;
    }
}