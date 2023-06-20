<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function twice($num)
    {
        $num=$num*2;
        return $num;
    }
    $origin=3;
    $ans=twice($origin);
    print"関数処理の結果： $origin を倍にしたよ→ $ans";
    ?>
</body>
</html>