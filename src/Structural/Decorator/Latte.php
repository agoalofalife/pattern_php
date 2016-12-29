<?php
namespace Pattern\Structural\Decorator;

class Latte extends CoffeeDecorator implements CoffeeContract
{
    protected $ingredients = [ 'Milk', 'Cream', 'Love' ];

    public function collect() : string
    {
        $this->coffee->addIngredients(  $this->ingredients );

        return $this->coffee->collect();
    }
}