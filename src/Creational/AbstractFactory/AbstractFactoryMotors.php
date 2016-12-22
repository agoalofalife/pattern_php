<?php
namespace Pattern\Creational\AbstractFactory;

/**
 * Factory make technique
 * What is technology ?
 * it does not matter
 */
abstract class AbstractFactoryMotors
{
        abstract function createBike();

        abstract function createAuto();

        abstract function createBoat();
}