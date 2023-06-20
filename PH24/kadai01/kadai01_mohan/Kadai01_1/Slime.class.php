<?php
class Slime{
    private int $pos = 0;

    function getPos(){
        return $this->pos;
    }

    function run(){
        $this->pos += rand(-1, 3);
        echo $this->pos, PHP_EOL;
    }
}