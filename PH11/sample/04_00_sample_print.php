<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>時刻</title>
  </head>
  <body>
    <?php
    print("現在は");
    print(date('G時間 i分 s秒'));
    print("です。");
    print '<br>';
    print("現在は".(date('G時間 i分 s秒'))."です。");
    print '<br>';
    print(date('y'));
    print '<br>';
    print(date('Y'));
    ?>
  </body>
</html>
