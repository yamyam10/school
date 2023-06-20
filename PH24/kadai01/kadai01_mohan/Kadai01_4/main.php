<?php
require_once('Slime.class.php');

// レース出走者生成
$slimes[] = new Slime('=', '〇');
$slimes[] = new Slime('~', '☆');

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
