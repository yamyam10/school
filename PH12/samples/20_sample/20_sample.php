<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>数字チェック</title>
</head>
<body>
    <?php
    $age="3";

    var_dump($age);

    print'<br>';

    $age=mb_convert_kana($age,"n","UTF-8");

    var_dump($age);

    print'<br>';

    $age=mb_convert_kana($age, 'n', 'UTF-8');
    if (is_numeric($age)){
        print($age.'歳');
    }else{
        print('※　年齢が数字ではありません');
    }
    print'<hr>';

    $str="Webプログラミング";
    var_dump($str);
    print'<br>';
    $str_cnt=strlen($str);
    print($str_cnt);
    
    print'<hr>';
    print"置き換え前：$str<br>";
    $str=str_replace("Web","PHP",$str);
    print"置き換え後：$str<br>";
    ?>
</body>
</html>