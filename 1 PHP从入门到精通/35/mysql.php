<?php

    $link = mysqli_connect('localhost', 'root', 'root');
    
    if (!$link) {
        exit('数据库连接失败');
    }

    mysqli_set_charset($link, 'utf8');

    mysqli_select_db($link, 'bbs');

    // $sql = "select * from bbs_user";
    $sql = "insert into bbs_user values(3, '开发', '1', '河南', '1', '88')";
    echo $sql;

    $obj = mysqli_query($link, $sql);

    // var_dump($obj);

    // $res = mysqli_fetch_assoc($obj);
    // $res = mysqli_fetch_assoc($obj);
    // var_dump($res);

    // while ($rows = mysqli_fetch_assoc($obj)) {
    //     var_dump($rows);
    // }

    // $res = mysqli_fetch_row($obj);
    // $res = mysqli_fetch_array($obj);
    // $res = mysqli_num_rows($obj);
    // $res = mysqli_affected_rows($link);
    $res = mysqli_insert_id($link);
    var_dump($res);

    mysqli_close($link);