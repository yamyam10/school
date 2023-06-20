<?php
require_once('Slime.class.php');

// レース出走者生成
$slime = new Slime();

// レース開始
while($slime->getPos() < 10){
    $slime->run();
}