<?php

$dsn = 'mysql:host=localhost;dbname=demo;charset=utf8';

try {
    $pdo = new PDO($dsn, 'root', 'root');
    // 设置错误模式
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die('数据库连接失败'.$e->getMessage());
}

try {
    $stmt = $pdo->prepare('select name, password, money from user');
    $stmt->execute();
    /*$result = $stmt->fetch();
    var_dump($result);
    $result = $stmt->fetch();
    var_dump($result);*/

    /*$resutl = $stmt->fetchAll();
    var_dump($resutl);*/

    $stmt->bindColumn('name', $name);
    $stmt->bindColumn('password', $password);
    $stmt->bindColumn('money', $money);

    echo '<table border="1">';
    while ($stmt->fetch()) {
        echo '<tr>';
        echo '<td>'.$name.'</td>';
        echo '<td>'.$password.'</td>';
        echo '<td>'.$money.'</td>';
        echo '</tr>';
    }
    echo '</table>';
} catch (PDOException $e) {
    echo $e->getMessage();
}
