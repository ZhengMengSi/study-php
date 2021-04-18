<?php

$dsn = 'mysql:host=localhost;dbname=demo;charset=utf8';

try {
    $pdo = new PDO($dsn, 'root', 'root');
    // 设置错误模式
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    die('数据库连接失败'.$e->getMessage());
}

$sql = 'inserta into user(name, password, money) values("goudan", "123456", 1000)';
$ret = $pdo->exec($sql);

if ($ret > 0) {
    echo '插入成功';
} else {
    echo '插入失败';
}