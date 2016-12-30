<?php
namespace Pattern\Structural\Flyweight;

class CarrotsFlyweight implements IProduct
{
    private $color = 'orange';

    public function getColor()
    {
        return $this->color;
    }
}