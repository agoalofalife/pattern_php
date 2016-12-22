<?php
namespace Pattern\Creational\AbstractFactory;


abstract class Yamaha
{
    public const AUTHOR = 'Торакусу Ямаха';

    abstract function getSpeed();
}