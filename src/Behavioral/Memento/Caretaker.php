<?php

namespace Pattern\Behavioral\Memento;


class Caretaker {

    private $memento;

    public function getMemento() : Memento
    {
        return $this->memento;
    }

    public function setMemento(Memento $memento)
    {
        $this->memento = $memento;
    }

}
