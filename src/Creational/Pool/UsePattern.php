<?php

use Pattern\Creational\Pool\Pool;
use \Pattern\Creational\Pool\Order;

$pool    = new Pool();

$order   =  new Order();
$order2  =  new Order();
$process = $pool->get($order);
$process = $pool->freeze($order);
$process2 = $pool->get($order);


echo $pool->count();

//$process->setNumber(2);
//print  $process->getNumber();
