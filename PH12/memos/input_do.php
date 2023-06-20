<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習（めもの入力⇒DBへ保存）</title>
</head>
<body>
    <?php

try{
    $db=new PDO('mysql:dbname=mydb_it11b;host=127.0.0.1;charset=utf8','root','');
    }catch(PDOException $e){
        echo 'DB接続エラー:'.$e->getMessage();
    }
    //INSRET INTO memos SET memo="メモの内容",created_at=NOW();
    $count = $db->exec('INSERT INTO memos SET memo=" ' . $_POST['memo'] . ' ",created_at=NOW()');
    echo $count.'件のデータを挿入しました。';

    // $statement = $db->prepare('INSERT INTO memos SET memo=?,created_at=NOW()');
    //$statement->execute(array($_POST['memo']));

    // $statement->bindParam(l,$_POST['memo']);
    // $statement->execute();
?>
</body>
</html>