<?php
namespace Pattern\Creational\Builder;

/**
 * Class SchemeHouse
 *
 *  Abstract Schema Houses
 *
 * @package Pattern\Creational\Builder
 */
class SchemeHouse
{
    private $height;

    private $material;

    private $moneySpent;

    public function setHeight( int $height ) :void
    {
        $this->height = $height;
    }

    public function setMateterial( string $material ) : void
    {
        $this->material = $material;
    }

    public function setMoneySpent( int $moneySpent ) : void
    {
        $this->moneySpent = $moneySpent;
    }

}