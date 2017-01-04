<?php

use Pattern\Behavioral\Observer\{
    MatherSubject,
    OneChildObserver
};

class ObserverTest  extends PHPUnit\Framework\TestCase
{
    public function testObserver()
    {
        $child      = new OneChildObserver();
        $mather     = new MatherSubject();

        $mather->attach($child);
        $mather->toCook('Bouillon');
        $mather->notify();

        $this->expectOutputString(OneChildObserver::class .' get Bouillon <br>');
    }
}