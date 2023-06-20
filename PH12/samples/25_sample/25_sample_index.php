<?php
session_start();
$_SESSION["session_msg"]="Happy new year!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>セッションに値を保存する</title>
</head>
<body>
    <h1>セッションに値を保存しました。</h1>
    <a href="./25_sample_page02.php">次のページへ</a>
    <br><a href="./25_sample_index.php">TOP</a>
</body>
</html>