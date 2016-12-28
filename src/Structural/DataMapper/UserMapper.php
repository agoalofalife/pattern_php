<?php
namespace Pattern\Structural\DataMapper;


/**
 * Class UserMapper
 * @package Pattern\Structural\DataMapper
 */
class UserMapper extends MapperAbstract
{
    /**
     * Get all info finById
     * @param $id
     * @return mixed
     */
    public function finById($id) : Entity
    {
        $dataInStorage   =  $this->getById($id);

        return $this->create($dataInStorage);
    }

    /**
     * fill data Entity
     * @param Entity $entity
     * @param array  $data
     * @return Entity
     */
    public function fillEntity(Entity $entity, array $data) : Entity
    {
        $entity->setId($data['id']);
        $entity->firstname = $data['firstname'];
        $entity->lastname  = $data['lastname'];
        $entity->username  = $data['username'];

        return $entity;
    }

    protected function createEntity() : Entity
    {
        return new User();
    }

    // return collection data
    // delegates in storage
    protected function getById(int $id) : array
    {
        return $this->storage->getById($id);
    }

    /**
     * @param Entity $entity
     * @return array
     */
    protected function insertEntity(Entity $entity) : array
    {
        return $this->storage->insert($entity);
    }

    /**
     * @param Entity $entity
     * @return array
     */
    protected function updateEntity(Entity $entity) : array
    {
        return $this->storage->update($entity);
    }

    /**
     * sync and entity
     * @param Entity $entity
     */
    protected function deleteEntity(Entity $entity)
    {
        $this->storage->delete($entity);
    }
}