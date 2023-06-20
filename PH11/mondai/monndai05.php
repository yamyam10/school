<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>何か書け</title>
  </head>
  <body>
    <?php
    //print '<br>'; //改行
    //print '<hr>'; //線を引き改行
    // $i=1;
    // while ($i <= 365) {
    //   print(date('Y年n月j日(D)',strtotime('+'.$i.'day'));
    //   $i++;
    // }
    $i=1;
    while ($i <= 365)
      {
        $timestamp = strtotime("+".$i."day");
        $day = date("Y年n月j日(D)", $timestamp);
        print($day.'<br>');
        $i++;
       }
    ?>
  </body>
</html>
