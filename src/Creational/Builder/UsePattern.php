<?php
namespace Pattern\Creational\Builder;

/**
 * the client code shows us :
 * we need to turn the machine on
 *  to download the schema
 *  and prepare what we need
 */
$mashine = new Machine(); //On Mashine

$mashine->loadSchema(new HutSchema());
$mashine->prepare();
var_dump($mashine->getHouse());