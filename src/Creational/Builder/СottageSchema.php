<?php
namespace Pattern\Creational\Builder;

/**
 * Class СottageSchema
 * scheme for cottage
 * @package Pattern\Creational\Builder
 */
class СottageSchema extends SpecificSchemaHouse
{
    public function buildHeight() : void
    {
        $this->house->setHeight(2000) ;
    }

    public function buildMaterial() :void
    {
        $this->house->setMateterial('brick');
    }

    public function moneySpent()
    {
        $this->house->setMoneySpent(200);
    }
}