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

echo "[登録処理]".PHP_EOL;
echo "商品名を入力してください：";
$name = trim(fgets(STDIN));
// $length = trim(fgets(STDIN));
echo "価格を入力してください： ";
$price = fgets(STDIN);

// SQL文作成
$sql = <<<EOS
    INSERT INTO kadai03_products (
        name, 
        price
    ) 
    VALUES (
        "{$name}",
        $price
    );
EOS;

try{
    // DB接続
    $pdo = new PDO($dsn, $db_user, $db_password);

    // SQL実行
    if ($pdo->query($sql)) {
        echo "登録が完了しました。\n";
    }else {
        echo "登録に失敗しました。\n";
    }
}catch(PDOException $e){
    echo $e->getMessage();
}

// DB切断
$pdo = null;
?>