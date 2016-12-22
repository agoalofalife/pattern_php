<?php
namespace Pattern\Creational\AbstractFactory;

class YamahaBoat extends Yamaha
{
    public function getSpeed() : int
    {
        return 10;
    }
}