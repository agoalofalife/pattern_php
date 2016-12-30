<?php

use Pattern\Structural\Flyweight\{
    CarrotsFlyweight,
    CucumberFlyweight,
    FlyweightFactory
};

class FlyweightTest extends PHPUnit\Framework\TestCase
{
    public function testFlyweight()
    {
        $shoppingList  = [  CarrotsFlyweight::class,   CucumberFlyweight::class,  CarrotsFlyweight::class];
        $shoppingList2 = [  CarrotsFlyweight::class,   CucumberFlyweight::class, CucumberFlyweight::class, CarrotsFlyweight::class];
        $shoppingList3 = [  CarrotsFlyweight::class,   CucumberFlyweight::class, CucumberFlyweight::class];

        $objectsStorage = [];
        $factory = new FlyweightFactory();

        foreach ($shoppingList as $product)
        {
            array_push( $objectsStorage, $factory->get($product) );
        }
        foreach ($shoppingList2 as $product)
        {
            array_push( $objectsStorage, $factory->get($product) );
        }
        foreach ($shoppingList3 as $product)
        {
            array_push( $objectsStorage, $factory->get($product) );
        }
        $this->assertCount($factory->count(),  $factory);
        $this->assertNotEquals( $factory->count(), $objectsStorage );

    }
}