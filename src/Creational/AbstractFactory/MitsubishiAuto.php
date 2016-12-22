<?php
namespace Pattern\Creational\AbstractFactory;

class MitsubishiAuto extends Mitsubishi
{
    public function getSpeed() : int
    {
        return 100;
    }
}