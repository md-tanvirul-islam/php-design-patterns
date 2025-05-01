<?php
namespace App\DesignPatterns\StrategyPattern\V1;

class RubberDuck extends Duck{
    public function display(){
        echo "I am Rubber Duck. I can visible to others.\n";
    }

    public function swim()
    {

    }

    public function fly()
    {

    }

    public function quack()
    {
        echo "I am Rubber Duck. I sound sQuack instead of Quack.";   
    }
}