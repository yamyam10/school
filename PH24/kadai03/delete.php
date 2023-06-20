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

echo "[削除処理]".PHP_EOL;
echo "削除対象の商品 ID を入力してください：";
$delele = fgets(STDIN);

// SQL文作成
$sql = <<<EOS
    DELETE FROM kadai03_products WHERE id = $delele;
EOS;

try{
    // DB接続
    $pdo = new PDO($dsn, $db_user, $db_password);

    // SQL実行
    if ($pdo->query($sql)) {
        echo "削除が完了しました。\n";
    }else {
        echo "削除に失敗しました。\n";
    }
}catch(PDOException $e){
    echo $e->getMessage();
}

// DB切断
$pdo = null;
?>