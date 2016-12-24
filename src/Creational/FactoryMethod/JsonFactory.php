<?php
namespace Pattern\Creational\FactoryMethod;

/**
 * Class JsonFactory
 * @package Pattern\Creational\FactoryMethod
 */
class JsonFactory extends AbstractFactory
{
    protected $formatName = 'Json';

    public function getData() : FormatData
    {
       return new JsonFormat();
    }
}