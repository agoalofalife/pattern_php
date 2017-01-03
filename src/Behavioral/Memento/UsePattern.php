<?php


use Pattern\Behavioral\Memento\{
    Caretaker,
    Process
};


$originator = new Process();
$originator->start();


$caretaker = new Caretaker();
$caretaker->setMemento($originator->saveToMemento());

// Continue changing originator
$originator->pause();
$caretaker->setMemento($originator->saveToMemento());

// Restore saved state
$originator->restoreFromMemento($caretaker->getMemento());

echo $originator->getState();