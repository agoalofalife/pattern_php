<?php
use Pattern\Behavioral\Memento\{
    Caretaker,
    Process
};
class MementoTest  extends PHPUnit\Framework\TestCase
{
    public function testMemento()
    {
        $originator = new Process();
        $originator->start();


        $caretaker = new Caretaker();
        $caretaker->setMemento($originator->saveToMemento());
        $this->assertEquals($originator->getState(), 'start');

        $originator->pause();
        $caretaker->setMemento($originator->saveToMemento());

        $originator->restoreFromMemento($caretaker->getMemento());
        $this->assertEquals($originator->getState(), 'pause');
    }   
}