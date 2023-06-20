<?php
class PC{
    public string $maker;

    public function on(){
        echo $this->maker, 'OSの起動...';
    }
}

class NotePC extends PC{
    public int $battery;
}

$npc = new NotePC();
$npc -> maker = 'NEC';
$npc -> on();

class DesktopPC extends PC{
    public function on(){
        echo $this->maker, 'OSの起動!!!';
    }
}

$dpc = new DesktopPC();
$dpc -> maker = 'NEC';
$dpc -> on();

final class A{}
class B extends A{}