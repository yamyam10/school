<?php
session_start();
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
    print ("セッションの値：".$_SESSION["session_msg1"])
    ?>
    <br><a href="./25_sample_index.php">TOP</a>
</body>
</html>