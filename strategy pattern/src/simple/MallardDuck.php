<?php
namespace Tanvir\StrategyPattern;

use Tanvir\StrategyPattern\Duck;

class MallardDuck extends Duck{
    public function display(){
        echo "I am Mallar Duck. I can visible to others.\n";
    }

    public function swim()
    {
        echo "I am Mallar Duck. I can Swim. 🦆.\n";   
    }

    public function fly()
    {
        echo "I am Mallar Duck. I can fly.\n";
    }

    public function quack()
    {
        echo "I am Mallar Duck. I can quack.\n";
    }
}