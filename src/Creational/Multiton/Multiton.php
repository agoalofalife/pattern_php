<?php
namespace Pattern\Creational\Multiton;

/**
 * Class Multiton
 * this is just a repository of singleton
 * @info anti-pattern!!!!
 * @package Pattern\Creational\Multition
 */
class Multiton
{
    private static $instances = [];

    public static function getInstance(string  $instanceName) : Multiton
    {
        if (!isset(self::$instances[$instanceName])) {
            self::$instances[$instanceName] = new self();
        }
        return self::$instances[$instanceName];
    }
    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}
}