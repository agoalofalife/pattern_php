<?php
namespace Pattern\Behavioral\Visitor;


abstract class Coffee
{
    public function accept(VisitorInterface $visitor) : bool
    {
        return $visitor->visit($this);
    }
}