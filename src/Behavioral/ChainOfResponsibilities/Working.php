<?php
namespace Pattern\Behavioral\ChainOfResponsibilities;


abstract class Working
{
    const FRONT    = 1;
    const BACK     = 2;
    const DESIGNER = 3;
    const CONTENT  = 4;

    protected $responsibilities = [];
    protected $next;

    abstract protected function handlerWorks(ContractJob $job);
    
    public function __construct( array $responsibilities )
    {
        $this->responsibilities = array_merge($this->responsibilities, $responsibilities);
    }


    public function action(ContractJob $job, int $typeWork) : void
    {
        if ( in_array($typeWork, $this->responsibilities)  )
        {
             $this->handlerWorks($job);
        }

        if ( $this->getNext() )
        {
             $this->getNext()->action($job, $typeWork);
        }
    }
    // insert next worker
    public function setNext(Working $working) : void
    {
        $this->next = $working;
    }

    public function getNext()
    {
        return $this->next;
    }
    
}