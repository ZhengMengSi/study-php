<?php

/*function say()
{
    echo '这是我的介绍';
}

say();*/

function say($name, $age, $sex)
{
    echo '姓名：'.$name.'<br>';
    echo '年龄：'.$age.'<br>';
    echo '性别：'.$sex.'<br>';

    return '这是我的介绍';
}
echo say('张梦思', '27', '男');
