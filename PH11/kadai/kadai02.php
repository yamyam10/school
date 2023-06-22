<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>課題02</title>
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

    for ($i=0; $i <$num ; $i++) {
      $sum += $score[$i];
      print($score[$i]. "点<br>");
    }
    $avg = $sum / $num;
    print '<hr>';
    echo "合計は".$sum."点です。<hr>";
    echo "平均は".$avg."点です。<hr>";

    ?>
  </body>
</html>
