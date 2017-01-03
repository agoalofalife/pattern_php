<?php


namespace Pattern\Behavioral\Memento;


class Process
{
    private $state;
    
    public function start() : void
    {
        $this->state = 'start';
    }

    public function pause() : void
    {
        $this->state = 'pause';
    }

    public function finish() : void
    {
        $this->state = 'finish';
    }

    public function getState()  : string
    {
        return $this->state;
    }

    public function saveToMemento() : Memento
    {
        return new Memento($this->state);
    }

    public function restoreFromMemento(Memento $memento) : void
    {
        $this->state = $memento->getState();
    }
}