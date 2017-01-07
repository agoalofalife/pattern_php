<?php
use Pattern\Behavioral\Strategy\{
    PlaneStrategy, Shipping
};

class StrategyTest  extends PHPUnit\Framework\TestCase
{
    public function testStrategy()
    {
        $shipping = new Shipping( new PlaneStrategy());
        $shipping->makeDelivery('02.24');
        $this->expectOutputString('the goods will arrive by plane 02.24');
    }
}