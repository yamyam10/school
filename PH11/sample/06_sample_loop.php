<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>for&while</title>
  </head>
  <body>
    <?php
    //print '<br>'; //改行
    //print '<hr>'; //線を引き改行
    /*for
    for ($i=1; $i <=365 ; $i++) {
      print($i . "<br>");
    }*/
    $i=365;
    while ($i >= 1) {
      print($i);
      print(" loop-test<hr>");
      $i--;
    }
    ?>
  </body>
</html>
