<?php


use Pattern\Creational\Multiton\Multiton;

class MultitonTest extends PHPUnit\Framework\TestCase
{
    public function testMultiton()
    {
        $one = Multiton::getInstance('One');
        $this->assertInstanceOf(Multiton::class, $one);
        $this->assertSame($one, Multiton::getInstance('One'));
    }
}