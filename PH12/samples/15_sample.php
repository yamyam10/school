<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>XML</title>
  </head>
  <body>
    <?php
    //print '<br>'; //改行
    //print '<hr>'; //線を引き改行
    $xmltree=simplexml_load_file('https://h2o-space.com/feed');
    foreach ($xmltree -> channel -> item as $item):
    ?>
    ・<a href ="<?php print($item->link); ?>"><?php print($item->title); ?><br></a>
    <?php
  endforeach;
    ?>
  </body>
</html>
