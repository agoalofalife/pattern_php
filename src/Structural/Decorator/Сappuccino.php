<?php
namespace Pattern\Structural\Decorator;


class Сappuccino  extends CoffeeDecorator implements CoffeeContract
{
    protected $ingredients = [ 'Milk', 'Sugar', 'Cinnamon', 'Big Love' ];

    public function collect() : string
    {
        $this->coffee->addIngredients(  $this->ingredients );

        return $this->coffee->collect();
    }
}