<?php
namespace Pattern\Behavioral\ChainOfResponsibilities;


class FullStackWorking extends Working
{
    public function handlerWorks(ContractJob $job) : void
    {
        if ( $job->getCost() > 5500)
        {
            echo "working.. full stack \n";
        } else {
            echo "Won't work ... full stack \n";
        }
    }
}