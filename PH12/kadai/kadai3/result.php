<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>課題03</title>
</head>
<body>
    <?php
    $account_id="ths001";
    $account_password="001";
    print("認証結果：<br>");
    if($_POST['my_id']==$account_id && $_POST['my_password']==$account_password){
    print("OK：認証は成功しました！");
    }else{
    print("NG：ID またはパスワードが違います");
    }
    ?>
</body>
</html>