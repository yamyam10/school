<?php
class SmartPhone{
    function __construct(){
        echo 'construct'.PHP_EOL;
    }

    function call(){
        echo 'call...'.PHP_EOL;
    }
}
$sp = new SmartPhone();
$sp -> call();

class Robot{
    private string $name;
    private string $type;

    function __construct(string $name, string $type){
        $this->name = $name;
        $this->type = $type;
    }

    function say_name(){
        echo 'ぼく', $this->name.PHP_EOL;
    }

    function say_type(){
        echo 'type:', $this->type;
    }
}
$robot = new Robot('ドラえもん', '猫');
$robot ->say_name();
$robot ->say_type();