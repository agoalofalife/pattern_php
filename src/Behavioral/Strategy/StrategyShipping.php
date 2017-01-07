<?php
namespace Pattern\Behavioral\Strategy;

// strategy delivery
interface StrategyShipping
{
    public function shipping(string $date);
}