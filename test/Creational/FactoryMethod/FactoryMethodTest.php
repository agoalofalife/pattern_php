<?php

use Pattern\Creational\FactoryMethod\JsonFactory;
use Pattern\Creational\FactoryMethod\JsonFormat;
use Pattern\Creational\FactoryMethod\XmlFactory;
use Pattern\Creational\FactoryMethod\XmlFormat;

class FactoryMethodTest extends PHPUnit\Framework\TestCase
{
    public function setUp()
    {
        $this->xmlTest   = '<?xml version="1.0" encoding="UTF-8" ?><root></root>';
        $this->jsonarray = [ 'a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5 ];
    }

    public function testJson()
    {
        $xml      = new XmlFactory();
        $instance = $xml->getData();
        $this->assertInstanceOf( XmlFormat::class, $instance );
        $this->assertInstanceOf(\SimpleXMLElement::class, $instance->loadData( $this->xmlTest  )->format());
    }

    public function testXml()
    {
        $json     = new JsonFactory();
        $instance = $json->getData();
        $this->assertInstanceOf( JsonFormat::class, $instance);
        $this->assertInternalType('string',  $instance->loadData(   $this->jsonarray  )->format());
    }
}