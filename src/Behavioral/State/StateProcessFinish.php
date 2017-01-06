<?php
namespace Pattern\Behavioral\State;


class StateProcessFinish extends AbstractStateProcess
{
    public function start() : StateProcess
    {
        return new StateProcessStart();
    }
}