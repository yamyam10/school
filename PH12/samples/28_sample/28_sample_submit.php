<?php
//ファイル情報
    $file=$_FILES["picture"];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>>
</head>
<body>
    ファイル名(name):<?php print $file["name"]; ?><hr>
    ファイルタイプ(type):<?php print $file["type"]; ?><hr>
    ファイルサイズ(size):<?php print $file["size"]; ?><hr>
    ファイルの場所(tmp_name):<?php print $file["tmp_name"]; ?>
</body>
</html>