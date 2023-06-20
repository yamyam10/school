<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>課題02</title>
  </head>
  <body>
    <?php
      print("名前：");
      print($_REQUEST['my_name']);
      print("<br>性別：");
      if($_POST['gender']=="男性"){
        print('<font color="blue">男性</font>');
      }else{
        print('<font color="red">女性</font>');
      }
      print("<br>趣味：");
      foreach($_POST['reserve'] as $reserve)
      {
      print(htmlspecialchars($reserve,ENT_QUOTES).'');
      }
    ?>
  </body>
</html>
