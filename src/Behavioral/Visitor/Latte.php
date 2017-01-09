<?php
namespace Pattern\Behavioral\Visitor;


class Latte extends Coffee implements  ISweetnessCoffee
{
    public $sweetness  = 0.8;
    public $bitterness = 0.5;

    public function getSweetness() : int
    {
        return $this->sweetness;
    }
}