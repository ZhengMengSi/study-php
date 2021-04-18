<?php

function info($name = '张三', $sex = '男', $class = 12)
{
    echo '我是'.$name.'，性别是：'.$sex;

    return 1;
}

$num = info();
echo $num;
