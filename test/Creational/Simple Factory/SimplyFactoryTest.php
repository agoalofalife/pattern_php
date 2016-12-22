<?php
use Pattern\Creational\SimpleFactory\FactoryDishes;
use Pattern\Creational\SimpleFactory\SimpleFactory;


class SimplyFactoryTest extends PHPUnit\Framework\TestCase 
{
    public function setUp()
    {
        $this->myFavorite = new FactoryDishes( new SimpleFactory());
    }
    public function testInstance()
    {
        $this->assertInstanceOf(FactoryDishes::class, $this->myFavorite );
    }
}