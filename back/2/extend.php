<?php

class Animal
{
    public $name = '小芳';

    public function eat()
    {
        echo 'Animal';
    }
}

class Person extends Animal
{
    public $age = 20;
}

$xiaoming = new Person();
//echo $xiaoming->name;
//$xiaoming->eat();
echo $xiaoming->age;