<?php
namespace Pattern\Behavioral\Specification;


class LastActivitySpecification implements SpecificationInterface
{
    protected $limitActivity;

    public function __construct(string $limitActivity)
    {
        $this->limitActivity = $limitActivity;
    }

    public function isSatisfiedBy(User $user) : bool
    {
        if ( $this->limitActivity >  $user->getLastActivity())
        {
            return false;
        }
        return true;
    }
}