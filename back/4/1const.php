<?php

class Person
{
    const ABC = 1000;
    public $name;
    public $age;

    function test()
    {
        echo self::ABC;
    }
}

//echo Person::ABC;

$niu = new Person();
$niu->test();