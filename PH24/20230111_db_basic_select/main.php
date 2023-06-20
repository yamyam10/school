<?php
// 20230111_db_basic_select

//DSN(Data Source Name)…接続情報
$dsn = 'mysql:host=localhost;dbname=ph24;charset=utf8mb4';
$db_user = 'root';
$db_password = '';

// SQL文作成
$sql = <<<EOS
    SELECT *
      FROM users
EOS;

try{
    // DB接続
    $pdo = new PDO($dsn, $db_user, $db_password);

    // SQL実行
    $stmt = $pdo->query($sql);

    // 抽出結果を二次元配列で取得する。
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC); // 添え字のみはFETCH_NUM
}catch(PDOException $e){
    echo $e->getMessage();
}

// DB切断
$pdo = null;

foreach($users as $user){
    echo $user['id'], PHP_EOL;
}
print_r($users);
