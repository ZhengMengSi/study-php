<?php

class Person
{
    public static $name = '张梦思';

    public static function test()
    {
        echo '这是静态方法';
    }
}

//echo Person::$name;
Person::test();