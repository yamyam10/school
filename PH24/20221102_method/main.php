<?php
class Car{
    public int $gas = 0;

    function drive(){
        echo '走る。。。'.PHP_EOL;
    }

    function stop(){
        echo '止まる。'.PHP_EOL;
    }

    function gas_supply(int $liter){
        $this->gas += $liter;
        echo $liter.'Lガソリン給油'.PHP_EOL;
    }

    function get_gas(){
        return 'ガソリン残量'.$this->gas.'L'.PHP_EOL;
    }
}

 $car = new Car();
 $car->drive();
 $car->stop();
 $car->gas_supply(50);
 $car->gas_supply(10);
 echo $car->get_gas();
