<?php
namespace Tanvir\StrategyPattern;

class PekinDuck extends Duck {
    public function display(){
        echo "I am Pekin Duck. I can visible to others.\n";
    }

    public function swim()
    {
        echo "I am Pekin Duck. I can Swim.\n";   
    }

    public function fly()
    {

    }

    public function quack()
    {
        echo "I am Pekin Duck. I can quack.\n";
    }
}