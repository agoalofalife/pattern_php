<?php

use Pattern\Structural\Composite\{
    ComponentDish,
    CompositeCocoa,
    CompositeСhocolate
};

/**
 * Composite this is a good example
 * сomposition and inheritance
 * suitable when it is necessary to be treated as a unified whole
 */

$cocktail        = new ComponentDish();
$cocoa           = new CompositeCocoa();
$chocolate       = new CompositeСhocolate();

$cocktail->addSugarComposite($cocoa);
$cocktail->addSugarComposite($chocolate);

echo $cocktail->getSugar();