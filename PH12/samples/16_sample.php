<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>XML2</title>
  </head>
  <body>
    <?php
    //print '<br>'; //改行
    //print '<hr>'; //線を引き改行
    $file=file_get_contents('https://h2o-space.com/feed/json');
    $json=json_decode($file);

    foreach ($json -> items as $item) :
    ?>
    ・<a href ="<?php print($item->url); ?>"><?php print($item->title); ?><br></a>
    <?php
  endforeach;
    ?>
  </body>
</html>
