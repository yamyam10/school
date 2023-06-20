<?php
// 20230111_db_basic_update

//DSN(Data Source Name)…接続情報
$dsn = 'mysql:host=localhost;dbname=ph24;charset=utf8mb4';
$db_user = 'root';
$db_password = '';

// SQL文作成
$sql = <<<EOS
    INSERT INTO
    users(
        name,
        point
    )
    VALUES(
        'a',
        1
    )
EOS;
//↑ヒアドキュメント。改行ありの文字列が書ける。
//注意：基本的に終端記号は左端。

try{
    // DB接続
    $pdo = new PDO($dsn, $db_user, $db_password);

    // SQL実行
    $pdo->query($sql);
}catch(PDOException $e){
    echo $e->getMessage();
}

// DB切断
$pdo = null;
