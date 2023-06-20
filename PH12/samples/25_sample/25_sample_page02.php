<?php
session_start();
$_SESSION["session_msg1"]="三ページ目!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>セッションの値を参照する</title>
</head>
<body>
    <?php
    print("セッションの値：".$_SESSION["session_msg"]);
    print("<br>");
    unset($_SESSION["session_msg"]);
    ?>
    <br><a href="./25_sample_page03.php">次のページへ</a>
    <br><a href="./25_sample_index.php">TOP</a>
</body>
</html>