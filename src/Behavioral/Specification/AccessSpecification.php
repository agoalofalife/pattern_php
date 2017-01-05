<?php
namespace Pattern\Behavioral\Specification;


class AccessSpecification implements SpecificationInterface
{
    const ADMIN   = 'administrator';
    const USER    = 'user';
    const CONTENT = 'content';

    protected $concreteRule = [];
    protected $accessRule   = [ self::ADMIN, self::USER, self::ADMIN ];

    public function __construct(string $concrete = null)
    {
        if ( !is_null($concrete))
        {
            $this->concreteRule[] = $concrete;
        }

    }

    public function isSatisfiedBy(User $user) : bool
    {
        $boolConcrete = count( $this->concreteRule ) ? in_array($user->getAccess(), $this->concreteRule) : true;

        if ( in_array($user->getAccess(), $this->accessRule) && $boolConcrete )
        {
            return true;
        }
        return false;
    }
}