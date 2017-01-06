<?php


use Pattern\Behavioral\State\{
    Process, StateProcessStart
};

$process = new Process(new StateProcessStart());

var_dump($process->isStart());

$process->inProcess();
var_dump($process->isProcess());

$process->lock();
var_dump($process->isLock());