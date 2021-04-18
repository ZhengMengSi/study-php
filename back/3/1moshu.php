<?php

class Person
{
    public $name = '小明';
    protected $age = 18;
    private $height = 181;

    public function __get($name)
    {
        if ($name == 'age') {
            return $this->age;
        }
//        echo $name;
    }

    public function __set($name, $value)
    {
        var_dump($name, $value);
//        if ($name == 'age') {
//            $this->age = $value;
//        }
    }
}

$niu = new Person();
$niu->name = '小牛';
echo $niu->name;
//echo $niu->age;