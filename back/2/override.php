<?php

class Father
{
    public $name;
    public $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function jump()
    {
        echo 'jump <br>';
    }

    public function work()
    {
        echo '我勤勤恳恳地工作<br>';
    }
}

class Son extends Father
{
    public $height;
    public $weight;

    public function __construct($name, $age, $height, $weight)
    {
        parent::__construct($name, $age);
        $this->height = $height;
        $this->weight = $weight;
    }

    public function jump()
    {
        echo 'jump 5';
    }

    public function work()
    {
        parent::work();
        echo '11111';
    }
}

/*$fa = new Father();
$fa->jump();

$ming = new Son();
$ming->jump();*/

$ming = new Son('zms', 18, 181, 73);
echo $ming->name;
echo $ming->height;