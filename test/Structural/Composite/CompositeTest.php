<?php

use Pattern\Structural\Composite\{
    ComponentDish,
    CompositeCocoa,
    CompositeСhocolate
};

class CompositeTest extends PHPUnit\Framework\TestCase {

    public function testComposite()
    {
        $cocktail        = new ComponentDish();
        $cocoa           = new CompositeCocoa();
        $chocolate       = new CompositeСhocolate();

        $cocktail->addSugarComposite($cocoa);
        $cocktail->addSugarComposite($chocolate);

        $this->assertInstanceOf(ComponentDish::class, $cocoa);
        $this->assertInstanceOf(ComponentDish::class, $chocolate);
        $this->assertInternalType('int', $cocktail->getSugar() );

    }

}