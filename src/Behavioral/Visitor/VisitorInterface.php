<?php
namespace Pattern\Behavioral\Visitor;


interface VisitorInterface
{
    public function visit(Coffee $coffee);
}