<?php
namespace Pattern\Creational\AbstractFactory;

class MitsubishiBoat extends Mitsubishi
{
    public function getSpeed() : int
    {
        return 20;
    }
}