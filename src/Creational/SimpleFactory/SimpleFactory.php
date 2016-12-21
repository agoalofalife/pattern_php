<?php
namespace Pattern\Creational\SimpleFactory;

/**
 * Class SimpleFactory
 * return instance  ContractProduct type
 * @package Pattern\Creational\SimpleFactory
 */
class SimpleFactory
{
    public function createDishes(string $nameDishes) : ContractProduct
    {
        if ( $nameDishes === 'PekingDuck' )
        {
            return new PekingDuck();
        }
        else if( $nameDishes === 'GreekSalad')
        {
            return new GreekSalad();
        }

    }
}