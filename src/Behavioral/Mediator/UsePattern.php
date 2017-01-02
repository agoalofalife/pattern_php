<?php

use Pattern\Behavioral\Mediator\ManagerPassengerCar;
use Pattern\Behavioral\Mediator\PassengerCar;

$mediator  = new ManagerPassengerCar();

$passenger = new PassengerCar($mediator);

$mediator->setCar($passenger);


$passenger->notify(212);
