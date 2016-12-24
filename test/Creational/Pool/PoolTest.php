<?php
use Pattern\Creational\Pool\{
    Pool,
    Order
};


class PoolTest extends PHPUnit\Framework\TestCase
{
    public function setUp()
    {

    }
    public function testPool()
    {
        $pool    =   new Pool();

        $order    =  new Order();
        $order2   =  new Order();
        $process  =  $pool->get($order);
        $process2 =  $pool->get($order2);

        $this->assertCount(2, $pool);
        $this->assertNotSame($process, $process2);
    }

    public function testPoolFreeze()
    {
        $pool     =  new Pool();
        $order    =  new Order();
        $process  = $pool->get($order);
        $pool->freeze($order);
        $process2 = $pool->get($order);

        $this->assertCount(1, $pool);
        $this->assertSame($process, $process2);
    }
}