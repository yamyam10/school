<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>入力データを受け取り表示する</title>
  </head>
  <body>
    <?php
      // print("受け取りました。<br>");
      print("名前：");
      print($_REQUEST['my_name']);
      print("<br>");
      print("年齢：");
      print($_REQUEST['my_nen']);
    ?>
  </body>
</html>
