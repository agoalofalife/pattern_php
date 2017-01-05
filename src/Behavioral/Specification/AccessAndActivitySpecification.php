<?php

namespace Pattern\Behavioral\Specification;


class AccessAndActivitySpecification implements SpecificationInterface
{
    private $specifications;

    public function __construct(SpecificationInterface ...$specifications)
    {

        $filter = array_filter($specifications, function ($object){
           return $object instanceof AccessSpecification ||  $object instanceof LastActivitySpecification;
        });

        if ( $specifications !==  $filter ) {
            throw new \Exception('error');
        }
        $this->specifications = $specifications;
    }

    public function isSatisfiedBy(User $user) : bool
    {
        $satisfied = [];

        foreach ($this->specifications as $specification) {
            $satisfied[] = $specification->isSatisfiedBy($user);
        }

        return in_array(true, $satisfied);
    }
}