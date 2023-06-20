<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>入力データを受け取り表示する</title>
  </head>
  <body>
    <?php
      print("受け取りました。<br>");
      print(htmlspecialchars($_REQUEST['my_name'],ENT_QUOTES));
      print'<br>';
      print(ENT_QUOTES)
    ?>
  </body>
</html>
