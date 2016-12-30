<?php
namespace Pattern\Behavioral\ChainOfResponsibilities;

/**
 * Class Job
 * some job
 * @package Pattern\Behavioral\ChainOfResponsibilities
 */
class Job implements ContractJob
{

    public function make()
    {
        // do ...
        return 'ready!';
    }
    public function getCost() : int
    {
        return 3000;
    }
}