<?php
namespace Pattern\Creational\Prototype;
/**
 * Class TechniqueFactory
 * Factory Technique
 * @package Pattern\Creational\Prototype
 */
class TechniqueFactory
{
    protected $technique;

    public function __construct(Technique $technique)
    {
        $this->technique = $technique;
    }

    public function getTechnique() : Technique
    {
        return clone  $this->technique;
    }
}