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

// 出走者リスト出力
echo '[List of runners]', PHP_EOL;
for($i = 0; $i < count($slimes); $i++){
    echo "No." . ($i + 1) . ":" . $slimes[$i]->getMark(), PHP_EOL;
}

while(true){
    // Bet
    echo '[Bet]', PHP_EOL;
    echo 'No:';
    $betNo = trim(fgets(STDIN));

    if(is_numeric($betNo) && 1 <= $betNo && $betNo <= count($slimes)){
        break;
    }
}

// 開始演出
echo "[Ready]", PHP_EOL;
sleep(1);
for($i = 3; 0 < $i; $i--){
    echo $i . ' ';
    sleep(1);
}
echo 'Go!!', PHP_EOL;
sleep(1);

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

// Bet結果判定
echo 'You bet on ' . $slimes[($betNo - 1)]->getMark(), PHP_EOL;
$win = false;
foreach($winner as $mark){
    if($mark == $slimes[($betNo - 1)]->getMark()){
        $win = true;
        break;
    }
}

// Bet結果出力
$result = 'lose..';
if($win){
    $result = 'win!';
}
echo "You {$result}";
