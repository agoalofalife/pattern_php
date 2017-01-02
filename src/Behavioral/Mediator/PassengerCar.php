<?php
namespace Pattern\Behavioral\Mediator;


class PassengerCar extends TaxiPark
{
    public function getOrder($number) : void
    {
        echo 'get order number №'.$number;
    }
}