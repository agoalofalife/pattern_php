<?php
namespace Pattern\Structural\DataMapper;
use Exception;

/**
 * Class Entity
 */
abstract class Entity
{
    protected $id = null;

    public function getId() 
    {
        return $this->id;
    }

    public function setId( $id ) : int
    {
        if ( !is_null( $this->id ) )
        {
            throw new Exception('ID is exist');
        }
        return $this->id = $id;
    }
}