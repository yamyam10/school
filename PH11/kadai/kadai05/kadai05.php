<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>counter</title>
  </head>
  <body>
    <?php
    $f1="access_counter.txt";
    $f2="read_file.txt";
    $f3="write_file.txt";
    $f4=".txt";
    $ct=0;
    /*ファイルオープン*/
    $fpt=fopen($f1,"r+");

    /*カウント*/
    $ct=fgets($fpt);
    $ct=$ct+1;

    /*先頭に持っていく*/
    fseek($fpt,0,SEEK_SET);
    //rewind($fpt);

    /*書き込み*/
    fwrite($fpt,$ct);

    /*ファイルクローズ*/
    fclose($fpt);

    print "あなたは{$ct}人目のお客様です。";

    print'<hr>';

    /*オプション1*/
    $op1=file($f2);

    /*f3ファイルにf2の逆順を置く*/
    $op1=fopen($f2,"r+");
    fputs($f2,$f3);
    fgets($f3);

    //file_put_contents($f3,implode('',array_reverse($op1)));
    //
    // /*f3ファイルを開いて表示*/
    // print(file_get_contents($f3));

    print'<hr>';

    /*オプション2*/
    $op2=file($f);
    // $op2_1=array_reverse($op2);
    // foreach ($op2_1 as ) {
    //   print($);
    // }

    print'<hr>';


    ?>
  </body>
</html>
