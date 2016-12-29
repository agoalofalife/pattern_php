<?php
namespace Pattern\Structural\Decorator;

/**
 * Class StandardCoffee
 * @package Pattern\Structural\Decorator
 */
class StandardCoffee implements CoffeeContract
{
    protected $ingredients   =  ['Hot water', 'Coffee'];
    protected $templateGlass =  "your coffee is : <br/> ";

    public function collect() : string
    {
        $glass = '';
        $glass .= $this->templateGlass;
        foreach ($this->ingredients as $number => $ingredient) {
            $glass .= "$number $ingredient <br/>";
        }

        return $glass;
    }

    public function addIngredients(array $ingredients = []) : array
    {
        $this->ingredients = array_merge($this->ingredients, $ingredients);
        return $this->ingredients;
    }
}