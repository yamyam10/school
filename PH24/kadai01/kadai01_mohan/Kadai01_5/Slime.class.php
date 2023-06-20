<?php
class Slime{
    private int $pos = 0;

    function getPos(){
        return $this->pos;
    }

    private string $footprints;
    private string $mark;

    function __construct($footprints, $mark){
        $this->footprints = $footprints;
        $this->mark = $mark;
    }

    function run(){
        $this->pos += rand(-1, 3);
                
        for($i = 0; $i < $this->pos; $i++){
            echo $this->footprints;
        }
        echo $this->mark, PHP_EOL;

    }
}