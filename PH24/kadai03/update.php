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

echo "[更新処理]".PHP_EOL;
echo "更新対象の商品 ID を入力してください：";
$id = fgets(STDIN);
echo "新しい商品名を入力してください：";
$new_name = trim(fgets(STDIN));
echo "新しい価格を入力してください：";
$new_price = fgets(STDIN);

// SQL文作成
$sql = <<<EOS
    UPDATE kadai03_products SET name = "{$new_name}", price = $new_price
    WHERE id = $id;
EOS;

try{
    // DB接続
    $pdo = new PDO($dsn, $db_user, $db_password);

    // SQL実行
    if ($pdo->query($sql)) {
        echo "修正が完了しました。\n";
    }else {
        echo "修正が失敗しました。\n";
    }
}catch(PDOException $e){
    echo $e->getMessage();
}

// DB切断
$pdo = null;
?>