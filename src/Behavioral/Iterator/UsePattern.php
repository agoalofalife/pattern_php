<?php

use Pattern\Behavioral\Iterator\{
    Products,
    Toys,
    Warehouse
};

$wareHouse = new Warehouse();
$wareHouse->addSubject(new Toys());
$wareHouse->addSubject(new Products());

$allWeight = 0;
foreach ($wareHouse as $sub) {
    $allWeight += $sub->getWeight();
}

echo $allWeight;
