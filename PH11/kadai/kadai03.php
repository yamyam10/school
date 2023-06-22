<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>課題03</title>
  </head>
  <body>
    <?php
    //print '<br>'; //改行
    //print '<hr>'; //線を引き改行
    print '++++++++++ 今日の運勢占い ++++++++++';
    print '<br>';
    print '今日のあなたの運勢は・・・';
    print '<br>';
    $omikuji = mt_rand(1,100);
    if ($omikuji >= 1 && $omikuji <= 40) {
      print'<img src="image/omikuji_daikichi.png">';
    } else if ($omikuji >= 26 && $omikuji <= 40) {
      print'<img src="image/omikuji_kichi.png">';
    } else if ($omikuji >= 41 && $omikuji <= 55) {
      print'<img src="image/omikuji_chuukichi.png">';
    } else if ($omikuji >= 56 && $omikuji <= 70) {
      print'<img src="image/omikuji_syoukichi.png">';
    } else if ($omikuji >= 71 && $omikuji <= 85) {
      print'<img src="image/omikuji_suekichi.png">';
    } else if ($omikuji >= 86 && $omikuji <= 95){
      print'<img src="image/omikuji_kyou.png">';
    } else if ($omikuji >= 96 && $omikuji <= 100){
      print'<img src="image/omikuji_daikyou.png">';
    }
    print '<br>';
    print '++++++++++++++++++++++++++++++';
    print '<br>';
    print '今日のあなたのラッキーアイテムは・・・';
    print '<br>';
    $luckyitem = mt_rand(1,100);
    if ($luckyitem >= 1 && $luckyitem <= 10) {
      print'ハンカチ';
    } else if ($luckyitem >= 11 && $luckyitem <= 20) {
      print'スニーカー';
    } else if ($luckyitem >= 21 && $luckyitem <= 30) {
      print'リュック';
    } else if ($luckyitem >= 31 && $luckyitem <= 40) {
      print'ポーチ';
    } else if ($luckyitem >= 41 && $luckyitem <= 50) {
      print'文房具';
    } else if ($luckyitem >= 51 && $luckyitem <= 60){
      print'帽子';
    } else if ($luckyitem >= 61 && $luckyitem <= 70){
      print'ヘッドホン';
    } else if ($luckyitem >= 71 && $luckyitem <= 80){
      print'サングラス';
    } else if ($luckyitem >= 81 && $luckyitem <= 90){
      print'肩掛けバッグ';
    } else if ($luckyitem >= 91 && $luckyitem <= 99){
      print'ヘアバンド';
    } else if ($luckyitem == 100){
      print'あなたはラッキー何を持ってもいいことある';
    }
    print '<br>';
    print '++++++++++++++++++++++++++++++';
    print '<br>';
    print '今日のラッキーナンバーは・・・<br>';
    for ($i=0; $i <4 ; $i++) {
      $luckynumber = mt_rand(0,9);
      echo $luckynumber;
    }
    ?>
  </body>
</html>
