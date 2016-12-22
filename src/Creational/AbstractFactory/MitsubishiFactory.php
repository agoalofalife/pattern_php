<?php
namespace Pattern\Creational\AbstractFactory;

/**
 * Class MitsubishiFactory
 * Factory Mitsubishi
 * @package Pattern\Creational\AbstractFactory
 */
class MitsubishiFactory extends AbstractFactoryMotors
{
    public function createAuto() : Mitsubishi
    {
        return new MitsubishiAuto();
    }

    public function createBike() : Mitsubishi
    {
        return new MitsubishiBike();
    }

    public function createBoat() : Mitsubishi
    {
        return  new MitsubishiBoat();
    }
}