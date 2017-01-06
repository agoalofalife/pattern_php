<?php

namespace Pattern\Behavioral\State;

class AbstractStateProcess implements StateProcess
{
    public function start()
    {
        throw  new \Exception('error');
    }
    public function finish()
    {
        throw  new \Exception('error');
    }
    public function inProcess()
    {
        throw  new \Exception('error');
    }
    public function unlock()
    {
        throw  new \Exception('error');
    }
    public function lock()
    {
        throw  new \Exception('error');
    }
}