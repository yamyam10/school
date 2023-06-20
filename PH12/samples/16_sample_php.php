<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>XML2_php</title>
  </head>
  <body>
    <?php
    //print '<br>'; //改行
    //print '<hr>'; //線を引き改行
    $file=file_get_contents('https://h2o-space.com/feed/json');
    $json=json_decode($file);

    foreach ($json -> items as $item) {
      print('・<a href ="');
      print($item->url);
      print('">');
      print($item->title);
      print('<br></a>');
    }
    ?>
  </body>
</html>
