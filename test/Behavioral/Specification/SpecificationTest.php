<?php
use Pattern\Behavioral\Specification\{
    AccessAndActivitySpecification, AccessSpecification, LastActivitySpecification, User
};

class SpecificationTest  extends PHPUnit\Framework\TestCase
{
    public function testAccess()
    {
        $userAccess   = new User('Ilya', 'administrator');
        $access       = new AccessSpecification();
        $this->assertTrue($access->isSatisfiedBy($userAccess));
    }

    public function testActivity()
    {
        $userActivity              = new User('Ilya', 'administrator', '20');
        $LastActivitySpecification = new LastActivitySpecification('30');
        $this->assertFalse($LastActivitySpecification->isSatisfiedBy($userActivity));
    }

    public function testAccessAndActivity()
    {
        $userActivity              = new User('Ilya', 'administrator', '20');
        $access                    = new AccessSpecification();
        $LastActivitySpecification = new LastActivitySpecification('10');
        $AccessAndActivity         = new AccessAndActivitySpecification($LastActivitySpecification, $access);
        $this->assertTrue($AccessAndActivity->isSatisfiedBy($userActivity));
    }

}