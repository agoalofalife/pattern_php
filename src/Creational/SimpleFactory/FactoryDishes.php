<?php
namespace Pattern\Creational\SimpleFactory;

/**
 * Class FactoryDishes
 * factory dishes
 * @package Pattern\Creational\SimpleFactory
 */
class FactoryDishes
{
    public $simplyFactory;

    public $dishes;

    public function __construct(SimpleFactory $factory)
    {
        $this->simplyFactory = $factory;
    }

    public function produceDishes(string $nameDishes) :FactoryDishes
    {
        $this->dishes = $this->simplyFactory->createDishes( $nameDishes );
        return $this;
    }

    public function getSmell()
    {
        return $this->dishes->smell();
    }

}