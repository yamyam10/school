<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>電話番号</title>
</head>
<body>
    <?php
    /*電話番号*/
    $zip='080-1234-5678';

    $zip=mb_convert_kana($zip,"a","UTF-8");
    /*電話番号の書式：「数値2~4桁-数値2~4桁-数値4桁」*/
    //if (preg_match("/\A\d{3}[-]\d{4}\z/",$zip))
    if (preg_match("/^[0-9]{2}-[0-9]{4}-[0-9]{4}$/",$zip))
    {
        print"電話番号：".$zip;
    }
    elseif (preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/",$zip))
    {
        print"電話番号：".$zip;
    }
    else    /*誤った記述の場合*/
    {
        print"【エラー】電話番号を入力してください";
    }
    ?>
</body>
</html>