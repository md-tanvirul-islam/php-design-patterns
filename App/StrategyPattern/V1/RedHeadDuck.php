<?php
namespace App\DesignPatterns\StrategyPattern\V1;

class RedHeadDuck extends Duck{
    public function display(){
        echo "I am Red Head Duck. I can visible to others.\n";
    }

    public function swim()
    {
        echo "I am Red Head Duck. I can Swim.\n";   
    }

    public function fly()
    {
        echo "I am Red Head Duck. I can fly.\n";
    }

    public function quack()
    {
        echo "I am Red Head Duck. I can quack.\n";
    }
}