<?php
namespace Pattern\Behavioral\Iterator;


class Toys implements Subject
{
    private $id;

    public function __construct()
    {
        $this->generateId();
    }
    
    public function getWeight() : int
    {
        return 10;
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