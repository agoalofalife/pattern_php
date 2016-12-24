<?php
namespace Pattern\Creational\FactoryMethod;

$test =  ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$string = <<<XML
<?xml version='1.0'?> 
<document>
 <title>Что 40?</title>
 <from>Джо</from>
 <to>Джейн</to>
 <body>
  Я знаю, что это - ответ. В чем заключается вопрос?
 </body>
</document>
XML;

$json = new XmlFactory();

var_dump($json->getData()->loadData( $string )->format());