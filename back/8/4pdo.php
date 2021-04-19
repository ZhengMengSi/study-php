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
    // 预处理
//    $stmt = $pdo->prepare('insert into user(name, password, money) values(?,?,?)');
//    $stmt = $pdo->prepare('insert into user(name, password, money) values(:name,:password,:money)');
    /*$stmt = $pdo->prepare('delete from user where id=?');
    $stmt->execute([1]);*/

    $stmt = $pdo->prepare('update user set name=:name where id=:id');
    $stmt->execute([
        ':name' => '曹操',
        ':id' => 2
    ]);

    /*$stmt->bindParam(1, $name);
    $stmt->bindParam(2, $pwd);
    $stmt->bindParam(3, $money);*/

    /*$stmt->bindParam(':name', $name);
    $stmt->bindParam(':password', $pwd);
    $stmt->bindParam(':money', $money);*/

    /*$name = '沙和尚';
    $pwd = '12345';
    $money = 3000;
    $stmt->execute();

    $name = '唐僧';
    $pwd = '12345';
    $money = 4000;
    $stmt->execute();*/

    /*$stmt->execute([
        ':name' => '刘备',
        ':password' => '22',
        ':money' => '222',
    ]);*/
//    $stmt->execute(['赵云','6','6']);
} catch (PDOException $e) {
    echo $e->getMessage();
}
