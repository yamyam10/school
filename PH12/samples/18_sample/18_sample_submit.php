<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>性別</title>
  </head>
  <body>
  性別：
    <?php
    print(htmlspecialchars($_POST['gender'],ENT_QUOTES));
    ?>
  </body>
</html>
