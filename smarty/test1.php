<?php
require './libs/Smarty.class.php';
$smarty=new Smarty();
// $name='刘二狗';
// $smarty->assign( 'name' , $name );
// $smarty->display('./test1.html');

class person
{
    public $name = '狗蛋';
    public $sex = '男';
    public $age = '18';
}

$jane = new person();

$smarty -> assign('jane', $jane);
$smarty->display('./test1.html');