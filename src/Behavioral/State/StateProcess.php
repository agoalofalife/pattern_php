<?php
namespace Pattern\Behavioral\State;


interface StateProcess
{
    public function start();
    public function finish();
    public function inProcess();
    public function unlock();
    public function lock();

}