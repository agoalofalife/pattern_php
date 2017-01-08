<?php
namespace Pattern\Behavioral\TemplateMethod;


abstract class AbstractFactory
{
    final public function builderDetail(string $schema)
    {
        $this->loadSchema($schema);
        $this->makeDetail();
        $this->getDetail();
    }

    abstract function loadSchema(string $schema);

    abstract function makeDetail();

    abstract function getDetail();
}