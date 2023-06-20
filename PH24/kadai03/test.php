<?php
//DSN(Data Source Name)…接続情報
$dsn = 'mysql:host=localhost;dbname=ph24;charset=utf8mb4';
$db_user = 'root';
$db_password = '';

// 接続状況をチェックします
if (mysqli_connect_errno()) {
    die("データベースに接続できません:" . mysqli_connect_error() . "\n");
}
echo "データベースの接続に成功しました。\n";

try{
    // DB接続
    $pdo = new PDO($dsn, $db_user, $db_password);
}catch(PDOException $e){
    echo $e->getMessage();
}

// DB切断
$pdo = null;
?>