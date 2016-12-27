<?php
namespace Pattern\Structural\Composite;

class ComponentDish implements Sugar 
{
    private $components = [];

    public function addSugarComposite(ComponentDish $component)
    {
        $this->components[] = $component;
    }

    public function getSugar() : int
    {
        $amount = 0;
        foreach ( $this->components as $component)
        {
            $amount += $component->getSugar();
        }
        return $amount;
    }

}