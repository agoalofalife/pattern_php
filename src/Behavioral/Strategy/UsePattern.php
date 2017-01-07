<?php

use Pattern\Behavioral\Strategy\{
    PlaneStrategy, Shipping
};

$shipping = new Shipping( new PlaneStrategy());
$shipping->makeDelivery('02.24');