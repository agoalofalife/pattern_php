<?php

use Pattern\Structural\Decorator\{
    Latte,
    StandardCoffee,
    Сappuccino
};

$coffee = new StandardCoffee();
$test   = new Latte($coffee);
echo $test->collect();

$test2 = new Сappuccino($coffee);
echo $test2->collect();