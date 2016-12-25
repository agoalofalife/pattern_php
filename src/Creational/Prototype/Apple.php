<?php
namespace Pattern\Creational\Prototype;

/**
 * Class Apple
 *
 * @package Pattern\Creational\Prototype
 */
class Apple extends Technique
{
    protected $list = [ 'MacBook', 'Iphone', 'Ipad' ];

    public function getList()
    {
        return $this->list;
    }
}