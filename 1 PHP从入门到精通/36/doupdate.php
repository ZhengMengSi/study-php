<?php
    $id = $_GET['id'];
    $username = $_GET['username'];
    $password = $_GET['password'];

    $link = mysqli_connect('localhost', 'root', 'root');
    if (!$link) {
        exit('数据库连接失败');
    }
    mysqli_set_charset($link, 'utf8');

    mysqli_select_db($link, 'bbs');

    $sql = "update bbs_user set username='$username', password='$password' where id=$id";
    // echo $sql;

    $res= mysqli_query($link, $sql);

    if ($res && mysqli_affected_rows($link)) {
        echo '修改成功<a href="userlist.php">返回</a>';
    } else {
        echo '修改失败';
    }
    

    mysqli_close($link);