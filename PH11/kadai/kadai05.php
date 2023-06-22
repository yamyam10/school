<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>counter</title>
  </head>
  <body>
    <?php
    $fpt=fopen("./kadai05/access_counter.txt","r+");
    $counter=0;

    $counter=fgets($fpt);
    $counter++;
    
    print "あなたは{$counter}人目のお客様です。";

    fclose($fpt);
    ?>
  </body>
</html>
