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
    $avg=0;//平均

    print("1人目：".$score[0]. "点 ");
    for ($i=0; $i <$score[0] ; $i++) {
      print('＊');
    }
    print '<br>';

    print("2人目：".$score[1]. "点 ");
    for ($i=0; $i <$score[1] ; $i++) {
      print('＊');
    }
    print '<br>';

    print("3人目：".$score[2]. "点 ");
    for ($i=0; $i <$score[2] ; $i++) {
      print('＊');
    }
    print '<br>';

    print("4人目：".$score[3]. "点 ");
    for ($i=0; $i <$score[3] ; $i++) {
      print('＊');
    }
    print '<br>';

    print("5人目：".$score[4]. "点 ");
    for ($i=0; $i <$score[4] ; $i++) {
      print('＊');
    }
    print '<br><br>';
    for ($i=0; $i <$num ; $i++) {
      $sum += $score[$i];
    }
    echo "合計得点：".$sum."点";
    ?>
  </body>
</html>
