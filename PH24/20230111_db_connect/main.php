<?php
// 20230111_db_connect

// DB接続用オブジェクト
// PDO(PHP Data Object)

// SQL文作成

// DB接続
$pdo = new PDO(
    'mysql:host=localhost;dbname=ph24;charset=utf8mb4',
    'root',
    ''
);

// SQL実行

// DB切断
$pdo = null;

