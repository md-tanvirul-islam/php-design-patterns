<?php
namespace App\DesignPatterns\StrategyPattern\V1;

class DecoyDuck extends Duck{
    public function display(){
        echo "I am Decoy Duck. I can visible to others.\n";
    }

    public function swim()
    {

    }

    public function fly()
    {

    }

    public function quack()
    {

    }
}