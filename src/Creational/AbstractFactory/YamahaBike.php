<?php
namespace Pattern\Creational\AbstractFactory;

class YamahaBike extends Yamaha
{
    public function getSpeed() : int
    {
        return 200; // it is Yamaha
    }
}