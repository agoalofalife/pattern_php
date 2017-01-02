<?php
namespace Pattern\Behavioral\Mediator;

// it is mediator
abstract class Manager
{
   abstract public function postOrder(int $number, TaxiPark $park);
}

