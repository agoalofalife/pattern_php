<?php
namespace Pattern\Creational\AbstractFactory;

class MitsubishiBike extends Mitsubishi
{
    public function getSpeed() : int
    {
        return 150;
    }
}