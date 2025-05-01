<?php
require_once __DIR__ . '../../vendor/autoload.php';

use Tanvir\StrategyPattern\MallardDuck;
use Tanvir\StrategyPattern\RedHeadDuck;
use Tanvir\StrategyPattern\RubberDuck;

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