<?php
namespace Pattern\Creational\FactoryMethod;

/**
 * Class XmlFactory
 * Xml
 * @package Pattern\Creational\FactoryMethod
 */
class XmlFactory extends AbstractFactory
{
    protected $formatName = 'Xml';

    public function getData() : FormatData
    {
        return new XmlFormat();
    }
}