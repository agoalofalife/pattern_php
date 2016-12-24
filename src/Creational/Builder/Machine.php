<?php
namespace Pattern\Creational\Builder;

/**
 * Class Machine
 * Machine for prepare Houses
 * @package Pattern\Creational\Builder
 */
class Machine
{
     private $schema;

    public function loadSchema(SpecificSchemaHouse $schema) : void
    {
        $this->schema = $schema;
    }

    public function getHouse() : SchemeHouse
    {
        return $this->schema->getHouse();
    }

    public function prepare() : void
    {
        $this->schema->createHouse();
        $this->schema->buildHeight();
        $this->schema->buildMaterial();
        $this->schema->moneySpent();

    }
}