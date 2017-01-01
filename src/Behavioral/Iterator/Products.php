<?php
namespace Pattern\Behavioral\Iterator;


class Products implements Subject
{
    private $id;

    public function __construct()
    {
        $this->generateId();
    }

    public function getWeight() : int
    {
        return 12;
    }

    public function getId() : string
    {
        return $this->id;
    }

    public function generateId() : void
    {
        $this->id = uniqid();
    }
}