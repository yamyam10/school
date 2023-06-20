<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHPテンプレート</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHPテンプレート</h1>    
</header>

<main>
<h2>練習</h2>
<pre>
<?php
/* ここに、PHPのプログラムを記述します */
try{
$db=new PDO('mysql:dbname=mydb_it11b;host=127.0.0.1;charset=utf8','root','');
}catch(PDOException $e){
    echo 'DB接続エラー:'.$e->getMessage();
}

// $count = $db->exec('INSERT INTO items SET id=4 , name="アポロチョコ"');
// echo $count.'件のデータを挿入しました。';

// $count = $db->exec('UPDATE items SET name="アポロチョコBIG" WHERE id=4');
// echo $count.'件のデータを更新しました。';

// $count = $db->exec('DELETE FROM items WHERE id=4');
// echo $count.'件のデータを削除しました。';

$recodes = $db->query('SELECT * FROM items WHERE id=1');
// $recodes = $db->query('SELECT * FROM items WHERE id=2');
// $recodes = $db->query('SELECT * FROM items WHERE id=3');
// $recodes = $db->query('SELECT * FROM items WHERE id=4');

while($recode = $recodes->fetch()){
    print($recode['id']." ".$recode['name']."<br>");
}

$recodes = $db->query('SELECT COUNT(*) AS recode_cnt FROM items');

$recode = $recodes->fetch();

print($recode['recode_cnt']."<br>");

?>
</pre>
</main>
</body>    
</html>