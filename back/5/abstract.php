<?php

abstract class Person
{
    public $name;

    public function say()
    {
        echo '说出自己的名字';
    }
}

class Man extends Person
{

}
