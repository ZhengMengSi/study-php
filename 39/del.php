<?php

    $id = $_GET['id'];

    $link = mysqli_connect('localhost', 'root', 'root');
    if (!$link) {
        exit('数据库连接失败');
    }
    mysqli_set_charset($link, 'utf8');

    mysqli_select_db($link, 'bbs');

    $sql = "delete from bbs_user where id=$id";

    $boolean= mysqli_query($link, $sql);

    if ($boolean && mysqli_affected_rows($link)) {
        echo '删除成功，<a href="userlist.php">返回</a>';
    } else {
        echo '删除失败';
    }
    

    mysqli_close($link);