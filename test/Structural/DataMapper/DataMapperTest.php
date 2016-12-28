<?php


use Pattern\Structural\DataMapper\{
    UserMapper,
    Storage\StorageFile as Storage
};

class DataMapperTest extends PHPUnit\Framework\TestCase
{
    private $userMapper;

    public function setUp()
    {
        $this->userMapper = new UserMapper();
        $this->userMapper->loadStorage(new Storage());
    }

    public function testDataMapperUpdate()
    {
        $user           = $this->userMapper->finById(1);
        $user->lastname = 'Alker';
        $currentUpdate  = $this->userMapper->save($user);

        $this->assertInternalType('array', $currentUpdate);
        $this->assertTrue(in_array('Alker', $currentUpdate));
    }

    public function testDataMapperCreate()
    {
        $user              = $this->userMapper->create();
        $user->lastname    = 'Test';
        $newRecord         = $this->userMapper->save($user);
        $this->assertInternalType('array', $newRecord);
        $this->assertTrue(in_array('Test', $newRecord));
    }
}