<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>カレンダー</title>
  </head>
  <body>
    <?php
    //print '<br>'; //改行
    //print '<hr>'; //線を引き改行
    // for($i=1; $i<=365; $i++){
    //   $day=date('Y年n月j日(D)',strtotime('+'.$i.'day'));
    //   print($day."<hr>");
    // }
    // for( $i=1 ;  $i <= 365  ; $i++)
    //   {
    //     $timestamp = strtotime("+{$i}day");
    //     $day = date("Y年n月j日(D)", $timestamp);
    //     print("$i : $day<br>");
    //    }

  //  $day = date("n月j日(D)",20210615);
      //print("$day<br>");
      //$day_after_towmorrw=strtotime("+2day");
      //print($day_after_towmorrw);
      for($i=1; $i<=365; $i++){print(date('Y年n月j日(D)',strtotime('+'.$i.'day')));}
    ?>
  </body>
</html>
