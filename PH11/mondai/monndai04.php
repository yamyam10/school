<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>偶数のみのカウントダウン</title>
  </head>
  <body>
    <?php
    //print '<br>'; //改行
    //print '<hr>'; //線を引き改行
    /*for ($i=100; $i >=1 ; $i=$i-2) {
      print($i . "<br>");
    }*/
    $i=100;
    while ($i >= 1){
      print($i . "<hr>");
      $i=$i-2;
    }
    ?>
  </body>
</html>
