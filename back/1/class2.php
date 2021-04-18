<?php

class Person
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        // echo '小样';
        $this->name = $name;
        $this->age = $age;
    }

    public function test1()
    {
        echo 'test1';
    }

    public function test2()
    {
        $this->test1();
        echo 'test2';
    }
}

//$ming = new Person();
//$ming->name = '小明';
//$ming->age = 20;
//var_dump($ming);
//
//$niu = new Person();
//$niu->name = '小牛';
//$niu->age = 18;
//var_dump($niu);

/*$ming = new Person('小明', 20);
var_dump($ming);
$niu = new Person('小牛', 18);
var_dump($niu);*/

$niu = new Person('小牛', 18);
$niu->test2();