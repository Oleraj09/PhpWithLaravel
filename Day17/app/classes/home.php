<?php
namespace App\classes;
class home
{
    //Reverse array print without function
    public function printing(){
        
        $students=[
            'id' => 1,
            'name' => 'Oleraj',
            'standard' => 'CSE',
            'blood group' => 'B+',
            'father name' => 'Mr. X',
        ];
        // print_r($students);
        // print_r($justkey[1]);
        $justkey = array_keys($students);
        $var = count($justkey);
        $var2 = $var-1;
        for($i=$var2;$i>=0;$i--){
            if($i==0){
                echo $students[$justkey[$i]],'.';
            }
            else{
                echo $students[$justkey[$i]].',';
            }
        }
        echo " \n ";
    }
    //Some function for reverse
    public function func1(){
       $fruites = "Mango, banana, Apple, Gwava";
       $element_fruite = explode(', ', $fruites);
       $result = array_reverse($element_fruite);
       print_r($result);
    }
    // preg element with regular expression
    public function func2(){
        $fruites = "Mango, banana ,Apple2, Gwava";
        $element_fruite = preg_split('/, | ,/ ', $fruites);
        $result = array_reverse($element_fruite);
        print_r($result);
    }

}