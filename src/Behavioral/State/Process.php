<?php

namespace Pattern\Behavioral\State;

class Process
{
    private $state;

    public function __construct(StateProcess $process)
    {
        $this->setState($process);
    }

    public function start() : void
    {
        $this->setState($this->state->start());
    }

    public function inProcess() : void
    {
        $this->setState($this->state->inProcess());
    }

    public function finish()
    {
        $this->setState($this->state->finish());
    }

    public function lock() : void
    {
        $this->setState($this->state->lock());
    }

    public function unlock() : void
    {
        $this->setState($this->state->unlock());
    }

    public function isStart() : bool
    {
        return $this->state instanceof StateProcessStart;
    }

    public function isProcess() : bool
    {
        return $this->state instanceof StateProcessInProcess;
    }
    public function isLock() : bool
    {
        return $this->state instanceof StateProcessLock;
    }

    public function isFinish() : bool
    {
        return $this->state instanceof StateProcessFinish;
    }

    private function setState(StateProcess $process) : void
    {
        $this->state = $process;
    }
}