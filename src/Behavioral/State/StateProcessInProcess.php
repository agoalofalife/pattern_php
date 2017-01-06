<?php
namespace Pattern\Behavioral\State;


class StateProcessInProcess extends AbstractStateProcess
{

    public function finish() : StateProcess
    {
        return  new StateProcessFinish();
    }

    public function lock()
    {
        return new StateProcessLock();
    }
}