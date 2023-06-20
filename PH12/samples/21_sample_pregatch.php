<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>正規表現</title>
</head>
<body>
    <?php
    /*郵便番号*/
    $zip='123-1234';

    $zip=mb_convert_kana($zip,"a","UTF-8");
    /*郵便番号の書式：「数値3桁-数値4桁」*/
    //if (preg_match("/\A\d{3}[-]\d{4}\z/",$zip))
    if (preg_match("/^[0-9]{3}-[0-9]{4}$/",$zip))
    {
        print"郵便番号：〒".$zip;
    }
    else    /*誤った記述の場合*/
    {
        print"【エラー】郵便番号を入力してください";
    }
    ?>
</body>
</html>