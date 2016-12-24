<?php
namespace Pattern\Creational\Pool;

/**
 * Class Order
 * @package Pattern\Creational\Pool
 */
class Order extends PollDependence 
{
    protected $number;

    public function __construct()
    {
        parent::__construct();
    }

    public function setNumber(int $number)
    {
        $this->number = $number;
    }

    public function getNumber() :int
    {
        return $this->number;
    }
}