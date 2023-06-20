<?php
class Slime{
    private int $pos = 0;

    function getPos(){
        return $this->pos;
    }
    
    function run(){
        $this->pos += rand(-1, 3);
                
        for($i = 0; $i < $this->pos; $i++){
            echo '=';
        }
        echo '〇', PHP_EOL;

    }
}