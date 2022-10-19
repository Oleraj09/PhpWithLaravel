<?php
namespace App\classes;
class element
{
    public function arry(){
        $names=[
            "Oleraj" => [
                'age'=>29,
                'profession'=>[
                    'freelancer',
                    'Developer',
                    'Blogger'
                    ]],
            "Hossin",
            "Mondol"
        ];   
        print_r($names);
        echo "Find Blogger: "; print_r($names["Oleraj"]["profession"][2]);
        echo "\n";
    }
    
    public function printing(){
        $person=[
         'name'=>'Oleraj Hossin',
         'age'=>29,
         'profession'=>'Software Engineer',
         'Blood Group'=>'b+',
         'title'=>'Mondol',
         'Phone'=>'01781 886507',
         'gender'=>'Male',
         'adress'=>'Mirpur 2',
         'country'=> 'BD'
     ];   
     
    $person["Marital Status"]="Married";
    $newperson=$person; //Copy by reference deep copy
    print_r($newperson);
    $newperson=&$person; //call by pointer or value shallow copy
    $newperson['country']="Bangladesh"; 
    $justkeys=array_keys($person);
    $var = count($justkeys);
    $index = array_search('Phone', array_keys($person));
    for($i=0;$i<$var;$i++){
        if($i==$index){
            echo "+88 ";
            echo $person[$justkeys[$i]].', ';
        }
        elseif($i==($var-1)){
            echo $person[$justkeys[$i]].'.';
        }
        else{
            echo $person[$justkeys[$i]].', ';
        }
    }
    echo "\n";
    }
}