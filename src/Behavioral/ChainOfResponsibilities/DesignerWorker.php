<?php
namespace Pattern\Behavioral\ChainOfResponsibilities;


class DesignerWorker extends Working
{
    public function handlerWorks(ContractJob $job) : void
    {
        if ( $job->getCost() > 2500)
        {
            echo "working.. designer \n";
        } else {
            echo "Won't work ... designer \n";
        }
    }
}