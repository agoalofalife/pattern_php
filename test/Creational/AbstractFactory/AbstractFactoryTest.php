<?php

use Pattern\Creational\AbstractFactory\{
    MitsubishiFactory,
    YamahaFactory,
    MitsubishiAuto,
    MitsubishiBike,
    MitsubishiBoat,
    YamahaAuto,
    YamahaBike,
    YamahaBoat
};


class AbstractFactoryTest extends PHPUnit\Framework\TestCase
{
    public function setUp()
    {
        $this->mitsubishiFactory = new MitsubishiFactory();
        $this->yamahaFactory    = new YamahaFactory();
    }

    public function testInstanceMitsubishi()
    {
        $this->assertInstanceOf(MitsubishiAuto::class, $this->mitsubishiFactory->createAuto());
        $this->assertInstanceOf(MitsubishiBike::class, $this->mitsubishiFactory->createBike());
        $this->assertInstanceOf(MitsubishiBoat::class, $this->mitsubishiFactory->createBoat());
    }

    public function testInstanceYamaha()
    {
        $this->assertInstanceOf(YamahaAuto::class, $this->yamahaFactory->createAuto());
        $this->assertInstanceOf(YamahaBike::class, $this->yamahaFactory->createBike());
        $this->assertInstanceOf(YamahaBoat::class, $this->yamahaFactory->createBoat());
    }
}