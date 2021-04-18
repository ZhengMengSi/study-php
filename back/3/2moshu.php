<?php

class Person
{
    public $name;
    protected $age;
    private $height;


}

$niu = new Person();
unset($niu->name);
var_dump($niu);
