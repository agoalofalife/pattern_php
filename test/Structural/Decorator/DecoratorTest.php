<?php

use Pattern\Structural\Decorator\{
    Latte,
    StandardCoffee,
    Сappuccino
};


class DecoratorTest extends PHPUnit\Framework\TestCase
{
    private $coffee;

    public function setUp()
    {
        $this->coffee = new StandardCoffee();
    }

    public function testDecorator()
    {
        $test   = new Latte($this->coffee);
        $this->assertInternalType('string', $test->collect());

        $test2 = new Сappuccino($this->coffee);
        $this->assertInternalType('string', $test2->collect());
    }
}