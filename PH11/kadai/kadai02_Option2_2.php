<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>課題02+α</title>
  </head>
  <body>
    <?php
    //print '<br>'; //改行
    //print '<hr>'; //線を引き改行
    $score = [10,20,30,40,50];
    //数値型に”、’（ダブルクォーテーション、シングルクォーテーション）はいらない
    $num=5;//数
    $sum=0;//足し算

    for ($i=0; $i <$num ; $i++) {
      $sum += $score[$i];
      print($i+1);
      print("人目：".$score[$i]. "点 ");
      for ($j=0; $j <$score[$i] ; $j++) {
        print('*');
      }
      print '<br>';
    }
    print '<hr>';
    echo "合計得点：".$sum."点";
    ?>
  </body>
</html>
