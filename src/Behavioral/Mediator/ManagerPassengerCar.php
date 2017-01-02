<?php
namespace Pattern\Behavioral\Mediator;

// concrete mediator
class ManagerPassengerCar extends Manager
{
    public $car;
    public function setCar(PassengerCar $car)
    {
        $this->car = $car;
    }
    public function postOrder(int $number, TaxiPark $park) : void
    {
        if ( $park instanceof PassengerCar )
        {
            $this->car->getOrder($number);
        }

    }
}