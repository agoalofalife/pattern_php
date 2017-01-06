<?php

use Pattern\Behavioral\State\{
    Process, StateProcessStart
};

class StateTest  extends PHPUnit\Framework\TestCase
{
    public function testProcess()
    {
        $process = new Process(new StateProcessStart());

        $this->assertTrue($process->isStart());

        $process->inProcess();
        $this->assertTrue($process->isProcess());

        $process->lock();
        $this->assertTrue($process->isLock());
    }
}