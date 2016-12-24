<?php
namespace Pattern\Creational\Builder;

class HutSchema extends SpecificSchemaHouse
{
    public function buildHeight() : void
    {
        $this->house->setHeight(3000) ;
    }

    public function buildMaterial() :void
    {
        $this->house->setMateterial('tree');
    }

    public function moneySpent()
    {
        $this->house->setMoneySpent(150);
    }
}