<?php
namespace Pattern\Creational\FactoryMethod;

/**
 * Class XmlFormat
 * Concrete format Xml
 * @package Pattern\Creational\FactoryMethod
 */

class XmlFormat extends FormatData
{
    protected $data;

    public function loadData( $data ) : XmlFormat
    {
        $this->data = $data;
        return $this;
    }

    public function format() : \SimpleXMLElement
    {
        return simplexml_load_string( $this->data );
    }
}