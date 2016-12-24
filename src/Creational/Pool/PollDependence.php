<?php
namespace Pattern\Creational\Pool;

/**
 * Class PollDependence
 * @package Pattern\Creational\Pool
 */
abstract class PollDependence
{
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }
}