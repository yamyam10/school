<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>オブジェクト</title>
  </head>
  <body>
    <?php
    //print '<br>'; //改行
    $today=new DateTime();
    print("現在は".$today->format("G時i分s秒")."です");
    print '<br>';
    print($today->format("G:i:s"));
    ?>
  </body>
</html>
