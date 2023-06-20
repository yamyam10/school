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

echo "[一覧処理]".PHP_EOL;
echo "商品 ID,商品名,価格".PHP_EOL;


// SQL文作成
$sql = <<<EOS
    SELECT * 
    FROM kadai03_products;
EOS;

try{
    // DB接続
    $pdo = new PDO($dsn, $db_user, $db_password);

    // SQL実行
    $stmt = $pdo->query($sql);

    // 抽出結果を二次元配列で取得する。
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC); // 添え字のみはFETCH_NUM
}catch(PDOException $e){
    echo $e->getMessage();
}

// DB切断
$pdo = null;

foreach($products as $prd){
    echo $prd['id'].",",$prd['name'].",",$prd['price'].PHP_EOL;
}
?>