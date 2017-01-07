<?php
namespace Pattern\Behavioral\Strategy;


class CarStrategy implements StrategyShipping
{
    public function shipping(string $date)
    {
        echo 'the goods will arrive by car '. $date;
    }
}