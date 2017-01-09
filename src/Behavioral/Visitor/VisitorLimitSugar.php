<?php
namespace Pattern\Behavioral\Visitor;


class VisitorLimitSugar implements VisitorInterface
{
    public function visit(Coffee $coffee) : bool
    {
        return 0.9 >= $coffee->getSweetness();
    }
}