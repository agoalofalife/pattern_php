<?php
namespace Pattern\Creational\FactoryMethod;

/**
 * Class FormatData
 * abstract class with format data
 * @package Pattern\Creational\FactoryMethod
 */
abstract class FormatData
{
        abstract function loadData( $data );
        abstract function format();
}