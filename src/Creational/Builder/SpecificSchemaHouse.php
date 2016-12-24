<?php
namespace Pattern\Creational\Builder;

/**
 * Class SpecificSchemaHouse
 * this particular scheme for house
 * @package Pattern\Creational\Builder
 */
abstract class SpecificSchemaHouse
{
    protected $house;

    public function getHouse() : SchemeHouse
    {
        return $this->house;
    }


    public function createHouse() : void
    {
        $this->house = new SchemeHouse();
    }

    abstract function buildHeight();
    abstract function buildMaterial();
    abstract function moneySpent();

}