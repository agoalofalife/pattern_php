<?php
namespace Pattern\Behavioral\Specification;


class User
{
    private $name;
    private $access;
    private $activity;

    public function __construct(string $name, string $access = '',string  $activity = '')
    {
        $this->name     = $name;
        $this->access   = $access;
        $this->activity = $activity;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getAccess()
    {
        return $this->access;
    }

    public function setLastActivity(string $activity) : void
    {
        $this->activity = $activity;
    }

    public function getLastActivity() : string
    {
        return $this->activity;
    }
}