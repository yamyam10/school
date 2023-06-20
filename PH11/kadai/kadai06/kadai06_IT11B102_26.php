<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>アクセスカウンタ作成（グラフィック）</title>
  </head>
  <body>
    <?php
    $f1="counter.txt";
    $ct=0;
    /*ファイル開く*/
    $fpt=fopen($f1,"r+");
    /*ファイル読み取り*/
    $str=fgets($fpt);
    /*行数*/
    $nl=strlen($str);
    /*先頭に持っていく*/
    //fseek($fpt,0,SEEK_SET);
    rewind($fpt);
    /*カウント*/
    $ct=$str;
    $ct++;
    /*書き込み*/
    $no=fputs($fpt,$ct);
    /*ファイル閉じる*/
    fclose($fpt);
    /*intからstringに*/
    $str="$ct";

    print "あなたは";
    /*空白表示*/
    for ($i=0;$i<7-$nl;$i++) {
      $none="<img src=./images/none.png>";
    print $none;
    }
    /*画像をカウント分表示*/
    for ($i=0;$i<$nl;$i++) {
      $file=$str[$i];
      $img="<img src=./images/$file.png>";
      print $img;
    }

    print "人目のお客様です。";
    ?>
  </body>
</html>
