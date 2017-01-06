<?php

namespace Pattern\Behavioral\State;


class StateProcessStart extends AbstractStateProcess
{
    public function inProcess()
    {
        return new StateProcessInProcess();
    }
}