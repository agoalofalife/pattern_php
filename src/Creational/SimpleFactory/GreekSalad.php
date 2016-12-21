<?php
namespace Pattern\Creational\SimpleFactory;

/**
 * Class GreekSalad
 * salad has no smell
 * @package Pattern\Creational\SimpleFactory
 */
class GreekSalad implements ContractProduct
{
    public function smell() : string
    {
        return 'no smell';
    }
}