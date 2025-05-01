<?php

namespace App\DesignPatterns\StrategyPattern\V1\Contracts;

interface Duckable
{
    public function display();
    public function swim();
    public function fly();
    public function quack();
}
