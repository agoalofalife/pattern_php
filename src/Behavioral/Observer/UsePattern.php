<?php

use Pattern\Behavioral\Observer\{
    MatherSubject,
    OneChildObserver,
    TwoChildObserver
};


$child      = new OneChildObserver();
$child2     = new TwoChildObserver();
$mather     = new MatherSubject();

$mather->attach($child);
$mather->attach($child2);
$mather->toCook('Bouillon');
$mather->notify();

