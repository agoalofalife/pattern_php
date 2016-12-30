<?php

use Pattern\Behavioral\ChainOfResponsibilities\{
    BackWorking,
    DesignerWorker,
    FrontWorking,
    FullStackWorking,
    Job,
    Working
};

$someJob              = new Job();
$frontWorker          = new FrontWorking( [ Working::FRONT ] );
$backWorker           = new BackWorking( [ Working::BACK ] );
$designerWorker       = new DesignerWorker( [ Working::DESIGNER ] );
$fullStackWorker      = new FullStackWorking([ Working::DESIGNER, Working::BACK, Working::FRONT ]);

$frontWorker->setNext($backWorker);
$backWorker->setNext($fullStackWorker);
//$frontWorker->setNext($fullStackWorker);

// back don't work not have responsibilities
$frontWorker->action($someJob, Working::FRONT );

//  it is not enough [ back and full ]
$backWorker->action($someJob, Working::BACK );
