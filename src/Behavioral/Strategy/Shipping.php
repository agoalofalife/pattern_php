<?php
namespace Pattern\Behavioral\Strategy;


class Shipping
{
    protected $strategy;

    public function __construct(StrategyShipping $shipping)
    {
        $this->strategy = $shipping;
    }

    public function makeDelivery($date) : void
    {
         $this->strategy->shipping($date);
    }
}