<?php

use Pattern\Behavioral\Mediator\ManagerPassengerCar;
use Pattern\Behavioral\Mediator\PassengerCar;

class MediatorTest  extends PHPUnit\Framework\TestCase
{
    public function testMediator()
    {
        $mediator  = new ManagerPassengerCar();
        $passenger = new PassengerCar($mediator);
        $mediator->setCar($passenger);
        $passenger->notify(212);
        $this->expectOutputString('get order number №212');

    }
}