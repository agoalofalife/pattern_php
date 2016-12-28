<?php

use Pattern\Structural\DataMapper\Storage\StorageFile as Storage;
use Pattern\Structural\DataMapper\UserMapper;


$userMapper = new UserMapper();
$userMapper->loadStorage(new Storage());


// Fetch and manipulate the User object
$user           = $userMapper->finById(1);
$user->lastname = 'Alker';

//// Tell the UserMapper that the User needs to be saved.
$currentUpdate  = $userMapper->save($user);

$userNewMapper     = new UserMapper();
$userNewMapper->loadStorage(new Storage());
$user              = $userNewMapper->create();

$user->lastname = 'Test';

$newRecord = $userNewMapper->save($user);

print_r($newRecord);
