<?php

namespace Pattern\Behavioral\State;


class StateProcessLock  extends AbstractStateProcess
{
    public function unlock() : StateProcess
    {
        return new StateProcessInProcess();
    }
}