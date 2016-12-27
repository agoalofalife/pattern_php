<?php
namespace Pattern\Structural\Composite;


class CompositeCocoa extends ComponentDish
{
    public function getSugar() : int
    {
        return 10;
    }
}