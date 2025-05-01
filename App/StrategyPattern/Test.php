<?php

use App\DesignPatterns\StrategyPattern\V1\MallardDuck;
use App\DesignPatterns\StrategyPattern\V1\RedHeadDuck;
use App\DesignPatterns\StrategyPattern\V1\RubberDuck;

require_once __DIR__ . '/../../vendor/autoload.php';

// $duck =  new Duck;
// $duck->fly();

$mallardDuck = new MallardDuck;
// $mallardDuck->swim();
$mallardDuck->quack();
// $mallardDuck->fly();

$redHeadDuck = new RedHeadDuck;
// $redHeadDuck->swim();
$redHeadDuck->quack();
// $redHeadDuck->fly();

$rubberDuck = new RubberDuck;
// $rubberDuck->swim();
$rubberDuck->quack();
// $rubberDuck->fly();