<?php
namespace Pattern\Creational\FactoryMethod;

/**
 * Class AbstractFactory
 * @package Pattern\Creational\FactoryMethod
 */
abstract class AbstractFactory
{
    protected $formatName;

    abstract function getData();
}