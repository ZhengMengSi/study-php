<?php

/*$dsn = 'mysql:host=localhost;dbname=demo;charset=utf8';
$pdo = new PDO($dsn, 'root', 'root');
var_dump($pdo);*/

$dsn = 'mysql:host=localhost;dbname=demo;charset=utf8';

try {
    $pdo = new PDO($dsn, 'root', 'root');
} catch (PDOException $exception) {
    die($exception->getMessage());
}