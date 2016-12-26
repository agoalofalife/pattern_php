<?php
namespace Pattern\Structural\Adapter;


/**
 * the meaning of the pattern
 * to adapt the interface
 *
 */
$miniUSB    = new MiniUSB();
$adapter    = new AdapterUSB($miniUSB);

echo $adapter->connect();