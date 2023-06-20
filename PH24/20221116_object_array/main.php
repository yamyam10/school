<?php
class Product{
    public int $id;
    public int $price;

    function __construct(string $name, string $type){
        $this->id = $id;
    }
}

$cart = [];

for ($i = 0; $i < 5; $i++) { 
    $cart[] = new Product($i);
}

foreach ($cart as $Product) {
    echo $Product->$id;
}