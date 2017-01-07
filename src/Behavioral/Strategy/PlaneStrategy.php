<?php
namespace Pattern\Behavioral\Strategy;


class PlaneStrategy implements StrategyShipping 
{
    public function shipping(string $date)
    {
        echo 'the goods will arrive by plane '.$date;
    }
}