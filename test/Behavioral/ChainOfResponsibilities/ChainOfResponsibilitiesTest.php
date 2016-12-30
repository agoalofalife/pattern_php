<?php
use Pattern\Behavioral\ChainOfResponsibilities\{
    BackWorking,
    DesignerWorker,
    FrontWorking,
    Working
};

class ChainOfResponsibilitiesTest extends PHPUnit\Framework\TestCase
{

    public function testChainOfResponsibilitiesTest()
    {
        $frontWorker          = new FrontWorking( [ Working::FRONT ] );
        $backWorker           = new BackWorking( [ Working::BACK ] );
        $designerWorker       = new DesignerWorker( [ Working::DESIGNER ] );

        $frontWorker->setNext($backWorker);
        $backWorker->setNext($designerWorker);

        $this->assertEquals($frontWorker->getNext(), $backWorker);
        $this->assertEquals($backWorker->getNext(), $designerWorker);

    }
}