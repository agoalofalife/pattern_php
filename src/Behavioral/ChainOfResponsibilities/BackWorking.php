<?php
namespace Pattern\Behavioral\ChainOfResponsibilities;


class BackWorking extends Working
{
    public function handlerWorks(ContractJob $job) : void
    {
        if ( $job->getCost() > 3500)
        {
            echo "working.. back \n";
        } else {
            echo "Won't work ... back \n";
        }
    }
}