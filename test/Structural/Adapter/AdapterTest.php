<?php

use Pattern\Structural\Adapter\AdapterUSB;
use Pattern\Structural\Adapter\MiniUSB;

class AdapterTest extends PHPUnit\Framework\TestCase
{

    public function testAdapter()
    {
        $miniUSB    = new MiniUSB();
        $adapter    = new AdapterUSB($miniUSB);

        $this->assertInstanceOf( MiniUSB::class, $miniUSB);

    }
}