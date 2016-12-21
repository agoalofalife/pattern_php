<?php
/**
 * Created by PhpStorm.
 * User: chubarov
 * Date: 21.12.16
 * Time: 20:43
 */

namespace Pattern\Creational\SimpleFactory;

/**
 * Interface ContractProduct requires implements something product
 *
 * @package Pattern\Creational\SimpleFactory
 */
interface ContractProduct
{
    // the product should smell
    public function smell();
}