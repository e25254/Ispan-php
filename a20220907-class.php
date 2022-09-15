<?php

class Person{
    public $name;
    private $age;

    function __construct($name = 'jogn',$age = 18)
    {
        $this -> name = $name;
        $this -> age = $age;
    }
    function getInfo(){
        return json_encode([
            'name' => $this -> name,
            'age' => $this -> age,
        ]);
    }
    static function aaa(){
        return 12;
    }
}




$p1 = new Person('david',23);
$p1 -> name = 'flora';
// $p1 -> age = '20'; 錯誤


echo $p1 -> getInfo();

echo Person::aaa();
