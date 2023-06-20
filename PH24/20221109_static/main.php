<?php
class Mouse{
    public static int $count =0;
    public static function a(){
        echo 1;
    }
    public string $name;
    public function b(){}
    const MAX_LEVEL = 99;

    public function c(){
        echo self::$count;
    }
}
echo Mouse::MAX_LEVEL;
echo Mouse::$count;
Mouse::a();

$mouse = new Mouse();
$mouse -> c();
$mouse -> name = 'A';

Mouse::$count++;
$mouse -> c();
echo $mouse ->name;

$mouse2 = new Mouse();
$mouse2 -> c();
$mouse2 -> name = 'B';

Mouse::$count++;
$mouse2 -> c();
echo $mouse2 ->name;