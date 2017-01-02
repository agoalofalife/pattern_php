<?php
namespace Pattern\Behavioral\Mediator;


abstract class TaxiPark
{
    protected $manager;

    public function __construct(Manager $manager)
    {
        $this->manager = $manager;
    }

    public function notify(int $number)
    {
        $this->manager->postOrder($number, $this);
    }

    abstract function getOrder($number);
}