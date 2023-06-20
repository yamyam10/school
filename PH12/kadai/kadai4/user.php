<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー情報</title>
</head>
<body>
    <?php
    print($_SESSION["session_msg"]."さんのページです");
    ?>
    <br><a href="./index.html">TOP</a>
</body>
</html>