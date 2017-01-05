<?php
namespace Pattern\Behavioral\Specification;


interface SpecificationInterface
{
    public function isSatisfiedBy(User $user): bool;
}