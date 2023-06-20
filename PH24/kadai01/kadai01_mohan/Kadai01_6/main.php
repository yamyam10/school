<?php
require_once('Slime.class.php');

// レース出走者生成
const SLIME_INFOS = [
    ['footprints'=>'=', 'mark'=>'〇'],
    ['footprints'=>'~', 'mark'=>'☆'],
];

$slimes = [];
foreach( SLIME_INFOS as $slime_info ){
    $slimes[] = new Slime($slime_info['footprints'], $slime_info['mark']);
}

// レース開始
echo '-------------------------', PHP_EOL;

$continuation = true;
while($continuation){
    foreach($slimes as $slime){
        $slime->run();
        if(10 <= $slime->getPos()){
            $continuation = false;
        }
    }
    echo '-------------------------', PHP_EOL;
}

// 勝者リスト作成
$winner = [];
foreach($slimes as $slime){
    if(10 <= $slime->getPos()){
        $winner[] = $slime->getMark();
    }
}

// レース結果出力
echo 'Winner!', PHP_EOL;
foreach($winner as $mark){
    echo $mark, PHP_EOL;
}