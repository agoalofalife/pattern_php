<?php
namespace Pattern\Structural\Flyweight;

class CucumberFlyweight implements IProduct
{
    private $color = 'green';

    public function getColor()
    {
        return $this->color;
    }
}