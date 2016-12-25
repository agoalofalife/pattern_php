<?php

use Pattern\Creational\Prototype\{
    Apple,
    TechniqueFactory
};
class PrototypeTest  extends PHPUnit\Framework\TestCase
{
    public function testPrototype()
    {
        $factory    = new TechniqueFactory(new Apple());
        $prototype  = $factory->getTechnique();
        $prototype2 = $factory->getTechnique();
        $this->isInstanceOf(Apple::class, $prototype);
        $this->isInstanceOf(Apple::class, $prototype2);
        $this->assertFalse( $prototype2 === $prototype );

    }
}