<?php

use Pattern\Creational\Prototype\{
    Apple,
    TechniqueFactory
};


$factory = new TechniqueFactory(new Apple());
//
$factory->getTechnique()->getList();