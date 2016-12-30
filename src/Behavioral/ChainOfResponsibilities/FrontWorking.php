<?php
namespace Pattern\Behavioral\ChainOfResponsibilities;


class FrontWorking extends Working
{
    public function handlerWorks(ContractJob $job) : void
    {
        if ( $job->getCost() > 2500)
        {
           echo "working.. front \n";
        } else {
            echo "Won't work ... front \n";
        }
    }
}