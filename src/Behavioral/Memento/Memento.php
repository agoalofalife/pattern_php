<?php
namespace Pattern\Behavioral\Memento;

// classic memento class :=)
class Memento
{
    private $state;

    public function __construct($state)
    {
        $this->state = $state;
    }

    public function getState() : string
    {
        return $this->state;
    }
}