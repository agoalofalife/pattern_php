<?php
namespace Pattern\Structural\DataMapper;

/**
 * Class User
 * @package Pattern\Structural\DataMapper
 */
class User extends Entity
{
    public $lastname;
    public $firstname;
    public $username;

    public function getName() : string
    {
        return $this->firstname . ' ' . $this->$lastname;
    }
}