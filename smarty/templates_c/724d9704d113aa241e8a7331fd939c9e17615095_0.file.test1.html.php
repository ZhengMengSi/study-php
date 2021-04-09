<?php
/* Smarty version 3.1.39, created on 2021-04-09 17:46:51
  from 'D:\phpstudy_pro\WWW\study-php\smarty\templates\test1.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6070228b82ad99_91476579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '724d9704d113aa241e8a7331fd939c9e17615095' => 
    array (
      0 => 'D:\\phpstudy_pro\\WWW\\study-php\\smarty\\templates\\test1.html',
      1 => 1617961606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6070228b82ad99_91476579 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>smarty test1</title>
</head>
<body>
    名字：<?php echo $_smarty_tpl->tpl_vars['jane']->value->name;?>
<br>
    性别：<?php echo $_smarty_tpl->tpl_vars['jane']->value->sex;?>
<br>
    年龄：<?php echo $_smarty_tpl->tpl_vars['jane']->value->age;?>
<br>
</body>
</html><?php }
}
