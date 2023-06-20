<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>variable</title>
  </head>
  <body>
    <?php
    //print '<br>'; //改行
    //print '<hr>'; //線を引き改行
    //追加の買い物(50円)をした場合の改修(かいしゅう)

    //複数商品の合計金額出力できるかな？
    //100円と1050円と200円のお買い物
    //変数＄sumに商品の合計金額を格納(かくのう)する

    $sum=100+200+1050+50+500;
    $tax=0.08;
    $sum8=$sum*($tax+1);

    print("合計金額は：".$sum."です");
    print '<hr>';
    //合計金額に税額を加えた「税込価格」を表示
    //税率8％
    print("税額は：".$sum*$tax."です");
    print '<hr>';
    print("税込金額は：".$sum8."です");
    print '<hr>';
    print("$sum");
    print '<hr>';
    print('$sum');
    ?>
  </body>
</html>
