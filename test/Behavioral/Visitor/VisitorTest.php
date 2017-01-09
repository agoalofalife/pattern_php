<?php
use Pattern\Behavioral\Visitor\{
    Latte, VisitorCheckFavorite, VisitorLimitSugar
};

class VisitorTest  extends PHPUnit\Framework\TestCase
{
    public function testVisitor()
    {

        $limit         = new VisitorLimitSugar();
        $checkFavorite = new VisitorCheckFavorite();

        $latte = new Latte();

        $this->assertTrue($latte->accept($checkFavorite));
        $this->assertTrue($latte->accept($limit));

    }
}