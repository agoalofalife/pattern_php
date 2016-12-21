<?php
use Pattern\Creational\SimpleFactory\FactoryDishes;
use Pattern\Creational\SimpleFactory\SimpleFactory;

/**
 * Created by PhpStorm.
 * User: chubarov
 * Date: 21.12.16
 * Time: 21:52
 */
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