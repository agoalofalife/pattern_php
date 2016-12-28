<?php
namespace Pattern\Structural\DataMapper;

use Pattern\Structural\DataMapper\Contract\StorageType;

/**
 * Class MapperAbstract
 * @package Pattern\Structural\DataMapper
 */
abstract class MapperAbstract
{
    // data storage
    protected $storage;

    // load type storage
    public function loadStorage(StorageType $type) : void
    {
        $this->storage = $type;
    }


    public function create(array $data = []) : Entity
    {
        $entity = $this->createEntity();

        if ($data) {
            $entity = $this->fillEntity($entity, $data);
        }
        return $entity;
    }

    public function save(Entity $entity) : array
    {
        if ( is_null($entity->getId()) )
        {
            return $this->insertEntity($entity);
        } else {
            return $this->updateEntity($entity);
        }
    }

    public function delete(Entity $entity) : void
    {
        $this->deleteEntity($entity);
    }

    abstract protected function fillEntity(Entity $entity, array $data);
    abstract protected function createEntity();
    abstract protected function getById( int $id);
    abstract protected function insertEntity(Entity $entity);
    abstract protected function updateEntity(Entity $entity);
    abstract protected function deleteEntity(Entity $entity);
}