<?php

use Pattern\Behavioral\Specification\{
    AccessAndActivitySpecification, AccessSpecification, LastActivitySpecification, User
};


$userAccess   = new User('Ilya', 'administrator');
$access       = new AccessSpecification();
 var_dump($access->isSatisfiedBy($userAccess));

$userActivity              = new User('Ilya', 'administrator', '20');
$LastActivitySpecification = new LastActivitySpecification('10');
var_dump($LastActivitySpecification->isSatisfiedBy($userActivity));

$AccessAndActivity         = new AccessAndActivitySpecification($LastActivitySpecification, $access);
var_dump($AccessAndActivity->isSatisfiedBy($userActivity));
