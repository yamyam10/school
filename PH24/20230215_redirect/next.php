<?php
// 20230111_try-catch

// PHPのエラーの種類は以下４つ！
// ①Notice…注意
// ②Warning…警告
// ③Parse error…解析エラー
// ④Fatal error…致命的なエラー

// Warning/Noticeは、後続の処理が継続される。
// echo $a;
// echo 1, PHP_EOL;

// この2つは、「@」で出力を抑制することができる。
// ※けどやらない方が良い。
// echo @$a;
// echo 1, PHP_EOL;

// Parseエラーはそもそも動かない
// echo;

// Fatal errorはその場で処理が止まる。
// 正しくは、エラー情報が捕捉されるまで、制御が戻る。
// 1/0;
// echo 2, PHP_EOL;

// 明示的なエラーの捕捉コード
// [try-catch構文]
// try{
//     // エラーが発生しうるコード
// }catch(エラークラス名　変数){
//     // エラー発生時に処理するコード
//     // 主にログ出力等
// }
try{
    1/0;
    echo 3, PHP_EOL;
}catch(DivisionByZeroError $e){
    echo 'エラー発生！', PHP_EOL;
}
// 捕捉されたら、その後の処理は継続する。
echo 4, PHP_EOL;

// 詳細なエラー情報の取得
try{
    1/0;
}catch(DivisionByZeroError $e){
    echo $e->getMessage(), PHP_EOL;
    echo $e->getCode(), PHP_EOL;
    echo $e->getFile(), PHP_EOL;
    echo $e->getLine(), PHP_EOL;
    echo $e->getTraceAsString(), PHP_EOL;
}
// 捕捉されたら、その後の処理は継続する。
echo 5, PHP_EOL;

// エラーは、その種類に応じて、
// 対応する処理を分けることができる。
try{
    1 + '';
}catch(DivisionByZeroError $e){
    echo 6, PHP_EOL;
}catch(TypeError $e){
    echo 7, PHP_EOL;
}

// ネストOK
try{
    try{
    }catch(TypeError $e){
    }
}catch(TypeError $e2){
    try{
    }catch(TypeError $e3){
    }
}


function a(){
    b();
}

function b(){

}

a();