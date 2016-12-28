<?php
namespace Pattern\Structural\DataMapper\Storage;
use Pattern\Structural\DataMapper\Contract\StorageType;

/**
 * Class StorageFile
 *  storage data
 */
class StorageFile implements StorageType
{
    protected $field = [ 'id', 'firstname', 'lastname', 'username'];

    // example data
    protected $collection = [
        1 => [
            'id'        => '1',
            'firstname' => 'Brenton',
            'lastname'  => '',
            'username'  => 'Tekerson',
        ],
        2 => [
            'id'        => '2',
            'firstname' => 'Jon',
            'lastname'  => '',
            'username'  => '123',
        ],
    ];

    /**
     * @param $id
     * @return mixed
     * @throws \Exception
     */
    public function getById($id) : array
    {
        if ( !isset($this->collection[$id]) )
        {
            throw new \Exception('not exist id in collections!');
        }
        return $this->collection[$id];
    }

    /**
     * Insert new data in collection
     * @param $entity
     * @return array
     */
    public function insert($entity) : array
    {
        $temp = [];
        $generate = rand(1,1000000000);
        foreach (get_object_vars($entity) as $property => $valueProperty)
        {
            if ( in_array($property, $this->field) )
            {
                $temp[$property] = $valueProperty;
            }
        }
        $this->collection[$generate] = $temp;
        return $temp;
    }

    // update storage collection and return last update
    public function update($entity)
    {
        if ( !isset( $this->collection[$entity->getId()] ) )
        {
//            throw new Exception('not exist collection');
            return null;
        }

        foreach (get_object_vars($entity) as $property => $valueProperty)
        {
            if ( isset(  $this->collection[$entity->getId()][$property] ) )
            {
                $this->collection[$entity->getId()][$property] = $valueProperty;
            }
        }
        return   $this->collection[$entity->getId()];
    }

    public function delete($entity)
    {
        unset($this->collection[$entity->getId()]);
        return $entity->getId();
    }
}