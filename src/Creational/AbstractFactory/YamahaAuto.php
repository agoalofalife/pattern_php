<?php
namespace Pattern\Creational\AbstractFactory;

class YamahaAuto extends Yamaha
{
    public function getSpeed() : int
    {
        return 90;
    }
}