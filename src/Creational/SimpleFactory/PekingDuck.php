<?php
/**
 * Created by PhpStorm.
 * User: chubarov
 * Date: 21.12.16
 * Time: 20:45
 */

namespace Pattern\Creational\SimpleFactory;

/**
 * Class PekingDuck
 * PekingDuck very strong smell
 * @package Pattern\Creational\SimpleFactory
 */
class PekingDuck implements ContractProduct
{
    public function smell() : string
    {
        return 'mmmmmm';
    }
}