<?php

$dsn = 'mysql:host=localhost;dbname=demo;charset=utf8';

try {
    $pdo = new PDO($dsn, 'root', 'root');
    // 设置错误模式
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('数据库连接失败'.$e->getMessage());
}

try {
    // 开启一个事务
    $pdo->beginTransaction();

    $sql = 'update user set money=money-20 where id=1';
    $ret = $pdo->exec($sql);
    if ($ret > 0) {
        echo '减少20<br>';
    } else {
        throw new PDOException('转出失败');
    }

    $sql = 'update user set money=money+20 where id=2';
    $ret = $pdo->exec($sql);
    if ($ret > 0) {
        echo '加20<br>';
    } else {
        throw new PDOException('价20失败');
    }

    $pdo->commit();
    echo '交易成功';
} catch (PDOException $e) {
    $pdo->rollBack();
    echo $e->getMessage();
}
