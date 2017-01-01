<?php


use Pattern\Behavioral\Iterator\{
    Products,
    Toys,
    Warehouse
};

class IteratorTest extends PHPUnit\Framework\TestCase
{

    public function testResult()
    {
        $wareHouse = new Warehouse();
        $wareHouse->addSubject(new Toys());
        $wareHouse->addSubject(new Products());

        $allWeight = 0;
        foreach ($wareHouse as $sub) {
            $allWeight += $sub->getWeight();
        }

        $this->assertEquals(22, $allWeight);
    }

    public function testIfRemove()
    {
        $wareHouse = new Warehouse();
        $toys      = new Toys();
        $products  = new Products();
        $wareHouse->addSubject($toys);
        $wareHouse->addSubject($products);
        $wareHouse->removeSubject($products);

        $allWeight = 0;
        foreach ($wareHouse as $sub) {
            $allWeight += $sub->getWeight();
        }

        $this->assertEquals(10, $allWeight);
    }

    public function testCout()
    {
        $toys      = new Toys();
        $wareHouse = new Warehouse();

        $wareHouse->addSubject($toys);
        $this->assertCount(1, $wareHouse);
    }
}