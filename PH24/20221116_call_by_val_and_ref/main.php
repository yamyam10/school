<?php
//値渡し
$a = 10;
function b($c){
    $c++;
}
b($a);
echo $a;

class A{
    public $count = 0;
}
function x(A $y){
    $y->count++;
}
$a = new A();
x($a);
echo $a->count;
