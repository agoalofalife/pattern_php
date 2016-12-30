<?php
use Pattern\Structural\Flyweight\{
    CarrotsFlyweight,
    CucumberFlyweight,
    FlyweightFactory
};


$shoppingList  = [  CarrotsFlyweight::class,   CucumberFlyweight::class,  CarrotsFlyweight::class];
$shoppingList2 = [  CarrotsFlyweight::class,   CucumberFlyweight::class, CucumberFlyweight::class, CarrotsFlyweight::class];
$shoppingList3 = [  CarrotsFlyweight::class,   CucumberFlyweight::class, CucumberFlyweight::class];
$factory = new FlyweightFactory();

foreach ($shoppingList as $product)
{
    $cart = $factory->get($product);
}
foreach ($shoppingList2 as $product)
{
    $cart1 = $factory->get($product);
}
foreach ($shoppingList3 as $product)
{
    $cart2 = $factory->get($product);
}
echo $factory->count(); // how many things should be objects?