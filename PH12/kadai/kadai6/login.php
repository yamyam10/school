<?php
$_name=$_REQUEST['my_name'];
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
</head>
<body>
    <?php
    if($_name != ""){
        $UserName = $_name;
       }else{
        $UserName = "Guest";
      }
    print("ようこそ".$UserName."さん<br>");
    print('<a href="./user.php">'.$UserName."さんのページ</a>");
    $_SESSION["session_msg"]=$UserName;
    ?>
    <br><a href="./index.html">TOP</a>
</body>
</html>