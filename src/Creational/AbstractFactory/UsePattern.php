<?php
namespace Pattern\Creational\SimpleFactory;

/**
 * Use
 * each type has its own factory
 * who knows how to create the right product
 * a sense of duplication ...
 */

use Pattern\Creational\AbstractFactory\MitsubishiFactory;
use Pattern\Creational\AbstractFactory\YamahaFactory;

$mitsubisi =  new MitsubishiFactory();
$speedAuto =  $mitsubisi->createAuto()->getSpeed();
$speedBike =  $mitsubisi->createBike()->getSpeed();


$yamaha     = new YamahaFactory();
$speedAuto  = $mitsubisi->createAuto()->getSpeed();
$speedBike  = $mitsubisi->createBike()->getSpeed();



