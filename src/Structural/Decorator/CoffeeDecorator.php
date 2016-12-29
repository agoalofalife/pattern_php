<?php
namespace Pattern\Structural\Decorator;

/**
 * Class CoffeeDecorator
 * @package Pattern\Structural\Decorator
 */
abstract class CoffeeDecorator
{
    protected $coffee;
    protected $ingredients = [];

    public function __construct( CoffeeContract $coffee )
    {
        $this->coffee = $coffee;
    }
    /**
     * Add new ingredients
     * @param array $ingredients
     */
    public function addIngredients(array $ingredients = [])
    {
        $this->ingredients = $ingredients;
    }
}