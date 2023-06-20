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

// SQL文作成
$sql = <<<EOS
    CREATE TABLE kadai03_products(
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(20),
        price INT
    ) engine=innodb default charset=utf8;
EOS;

try{
    // DB接続
    $pdo = new PDO($dsn, $db_user, $db_password);

    // SQL実行
    if ($pdo->query($sql)) {
        echo "CREATE に成功しました。\n";
    }else {
        echo "CREATE に失敗しました。\n";
    }
}catch(PDOException $e){
    echo $e->getMessage();
}

// DB切断
$pdo = null;
?>