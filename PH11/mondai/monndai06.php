<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>irorio</title>
  </head>
  <body>
    <?php
    //print '<br>'; //改行
    //print '<hr>'; //線を引き改行
    $com =
[
  "キー"  => "値",
  "win"   => "Windows",
  "mac"   => "Macintosh",
  "ihone" => "iPhone",
  "ipad"  => "iPad",
  "android"  => "Android",
];
print '<hr>';
foreach ($com as $key => $value) {
  print ($key."|".$value."<br>");
}
print '<hr>';

$tbl = array('たろう','じろう','さぶろう');
foreach ($tbl as $value) {
  print ($value."<br>");
}
print '<hr>';

$student =
[
"name"     => "はる",
"number"   => "123",
];
foreach ($student as $value) {
  print ($value."<br>");
}
    ?>
  </body>
</html>
