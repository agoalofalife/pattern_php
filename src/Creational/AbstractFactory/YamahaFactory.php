<?php
namespace Pattern\Creational\AbstractFactory;


class YamahaFactory extends AbstractFactoryMotors
{
    public function createBoat() : Yamaha
    {
        return  new YamahaBoat();
    }

    public function createBike() : Yamaha
    {
        return  new YamahaBike();
    }

    public function createAuto() : Yamaha
    {
        return  new YamahaAuto();
    }
}