<?php
    $username = $_GET['username'];
    $password = md5($_GET['password']);
    $address = $_GET['address'];
    $sex = $_GET['sex'];
    $age = $_GET['age'];

    $link = mysqli_connect('localhost', 'root', 'root');
    if (!$link) {
        exit('数据库连接失败');
    }
    mysqli_set_charset($link, 'utf8');

    mysqli_select_db($link, 'bbs');

    $sql = "insert into bbs_user(username, password, address, sex, age) values('$username', '$password', '$address', '$sex', '$age')";

    $boolean= mysqli_query($link, $sql);
    var_dump($boolean);
    var_dump('插入结果: '.$boolean);
    var_dump('插入的ID: '.mysqli_insert_id($link));

    if ($boolean && mysqli_insert_id($link)) {
        echo '插入成功<a href="userlist.php">返回</a>';
    } else {
        echo '插入失败';
    }
    

    mysqli_close($link);