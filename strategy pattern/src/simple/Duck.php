<?php 

namespace Tanvir\StrategyPattern;

use Tanvir\StrategyPattern\contracts\Duckable;

class Duck implements Duckable{
    public function display(){
        echo "Yes, I can visible to others.\n";
    }

    public function swim(){
        echo "Yes, I can swim.\n";
    }

    public function fly(){
        echo "Yes, I can fly.\n";
    }

    public function quack(){
        echo "I make sound like Quack. General Duck.\n";
    }
}