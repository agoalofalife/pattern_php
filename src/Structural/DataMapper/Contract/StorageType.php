<?php
namespace Pattern\Structural\DataMapper\Contract;
/**
 * Class StorageFile
 * interface binding operations
 */
interface StorageType{
    public function getById($id);
    public function insert($entity);
    public function update($entity);
    public function delete($entity);
}