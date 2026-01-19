<?php
    //non-return without parameter
    function hello(){
        echo 'welcome</br>';
    }
    hello();
    //non-return with parameter
    function show($text,$number){
        echo $text,$number.'</br>';
    }
    show('HTML',5);
    //return without parameter
    function sum(){
        $a=10;
        $b=20;
        return $a+$b;
    }
    echo sum()+40,'</br>';
    // return with parameter
    function sum1($a,$b){
        return $a+$b;
    }
    echo sum1(10,20); //argument
