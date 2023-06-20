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

echo "メニューを入力してください。（1:登録, 2:更新, 3:削除, 4:一覧）:";
$menu = fgets(STDIN);

if ($menu == 1) {
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
}elseif ($menu == 2) {
    echo "[更新処理]".PHP_EOL;
echo "更新対象の商品 ID を入力してください：";
$id = fgets(STDIN);
echo "新しい商品名を入力してください：";
$new_name = trim(fets(STDIN));
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
}elseif ($menu == 3) {
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
}elseif ($menu == 4) {
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
}else {
    echo "error";
}



?>