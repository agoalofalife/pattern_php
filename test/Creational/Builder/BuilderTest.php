<?php

use Pattern\Creational\Builder\{
    HutSchema,
    Machine,
    SchemeHouse,
    СottageSchema
};

class BuilderTest extends  PHPUnit\Framework\TestCase
{
    public function setUp()
    {
        $this->mashine = new Machine();
    }

    public function testInstanceHut()
    {
        $this->mashine->loadSchema(new HutSchema());
        $this->mashine->prepare();
        $this->assertInstanceOf(SchemeHouse::class, $this->mashine->getHouse());
    }

    public function testInstanceCottatge()
    {
        $this->mashine->loadSchema(new СottageSchema());
        $this->mashine->prepare();
        $this->assertInstanceOf(SchemeHouse::class, $this->mashine->getHouse());
    }
}